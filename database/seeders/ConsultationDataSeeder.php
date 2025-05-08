<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\ConsultationData;
use App\Models\ConsultationField;
use App\Models\ConsultationList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ConsultationDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointments = Appointment::doesntHave('consultation')->get();

        foreach ($appointments as $appointment) {


            $consultation = Consultation::create([
                'patient_id'=>$appointment->patient_id,
                'appointment_id'=>$appointment->id,
                'client_id'=>$appointment->client_id,
                'status'=>'en curso',
            ]);

            $fields = ConsultationField::whereNull('category')->get();
            $diagnostic_id=null;
            foreach ($fields as $f){
                $value = '';
                $record_id=null;
                $diagnostico=null;
                $qty=null;
                $table_name=null;
                $model_name=null;
                switch ($f->type) {
                    case 'textarea':
                        $value = fake()->paragraph(3);
                        break;
                    case 'list':
                        $cl = ConsultationList::whereType($f->list_type)->inRandomOrder()->take(1)->first();
                        $value = $cl->value;
                        $record_id=$cl->id;
                        $table_name='consultation_lists';
                        $model_name='ConsultationList';
                        break;
                    case 'text':
                        $value = fake()->paragraph(1);
                        break;
                    case 'number':
                        if($f->name=='presion_sistolica') $value = fake()->numberBetween(60,140);
                        if($f->name=='presion_distolica') $value = fake()->numberBetween(40,90);
                        if($f->name=='frecuencia_cardiaca') $value = fake()->numberBetween(60,100);
                        if($f->name=='frecuencia_respiratoria') $value = fake()->numberBetween(12,20);
                        if($f->name=='temperatura') $value = fake()->randomFloat(1,37,40);
                        if($f->name=='peso') $value = fake()->randomFloat(1,50,100);
                        if($f->name=='altura') $value = fake()->randomFloat(1,140,200);
                        break;
                    case 'api':
                        $path = url($f->api_path.'?ramdom=true');
                        $response = Http::get($path);

                        $value = $response->json()['id'];
                        $record_id = $value;
                        if($f->name=='disability'){
                            $diagnostic_id = $value;
                            $table_name='diagnostics';
                            $model_name='Diagnostic';
                        }
                        if(in_array($f->name,['laboratorio','image','procedimiento'])){
                            $table_name='cpts';
                            $model_name='Cpt';
                        }
                        if(in_array($f->name,['especialidad'])){
                            $table_name='medical_speciality';
                            $model_name='MedicalSpeciality';
                        }
                        if(in_array($f->name,['medicines'])){
                            $table_name='medicines';
                            $model_name='Medicine';
                        }
                        break;
                }

                if($f->need_diagnostic) $diagnostico = $diagnostic_id;
                if($f->ask_qty==1) $qty = fake()->numberBetween(1,3);



                ConsultationData::create([
                    'consultation_id'=>$consultation->id,
                    'consultation_field_id'=>$f->id,
                    'user_id'=>$appointment->user_id,
                    'value'=>$value,
                    'record_id'=>$record_id,
                    'table_name'=>$table_name,
                    'model_name'=>$model_name,
                    'diagnostic_id'=>$diagnostico,
                    'qty'=>$qty,
                ]);

                $consultation->status='completado';
                $consultation->save();


            }
            $this->command->info('Consulta de la cita '.$appointment->id.' generada con extio.');
            $appointments->status='completada';
            $appointments->save();
        }
    }
}
