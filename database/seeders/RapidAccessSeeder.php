<?php

namespace Database\Seeders;

use App\Models\Cpt;
use App\Models\RapidAccess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RapidAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = public_path('rapid_access_default.csv');
        $handle = fopen($filename, 'r');

        if ($handle) {
            $i=0;
            while (($line = fgetcsv($handle, 4000, '*')) !== FALSE) {
                if($i>0){
                    //print_r($line); // Procesa los datos como un array
                    $cpt = Cpt::whereCode($line[0])->first();
                    if($cpt){

                        $ra = RapidAccess::whereCptId($cpt->id)->whereConsultationFieldId($line[2])->first();

                        if(!$ra){
                            RapidAccess::create([
                                'type'=>'MASTER',
                                'consultation_field_id'=>$line[2],
                                'cpt_id'=>$cpt->id,
                            ]);

                            $this->command->info('Rapid Access creado con extio para cpt code :'.$line[0]);
                        }else{
                            $this->command->warn('E¿l cpt code '.$line[0].' ya esta registrado para el campo '.$line[2]);
                        }
                    }else{
                        $this->command->error('El cpt code '.$line[0].' no encontrado en la base de datos de cpts');
                    }
                }

                $i++;
            }
            fclose($handle);
        } else {
            echo "Error al abrir el archivo.";
        }
    }
}
