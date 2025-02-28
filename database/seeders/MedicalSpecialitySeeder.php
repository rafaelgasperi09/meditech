<?php

namespace Database\Seeders;

use App\Models\MedicalSpeciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalSpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalSpeciality::create(['name'=>'Alergología','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Anestesiología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Cardiología','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Gastroenterología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Endocrinología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Geriatría','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Hematología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Infectología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina aeroespacial','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina del deporte','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina del trabajo','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina de urgencias','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina familiar y comunitaria','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina física y rehabilitación','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina intensiva','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina interna','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina forense','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina preventiva y salud pública','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Nefrología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Neumología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Neurología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Nutriología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Oncología médica','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Oncología radioterápica','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Pediatría','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Psiquiatría','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Reumatología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Toxicología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Cirugía cardíaca','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Cirugía general','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Cirugía oral y maxilofacial','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Cirugía ortopédica','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Cirugía pediátrica','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Cirugía plástica','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Cirugía torácica','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Neurocirugía','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Angiología','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Dermatología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Ginecología y obstetricia o tocología','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Oftalmología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Otorrinolaringología','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Urología','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Traumatología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Anatomía patológica','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Farmacología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Genética médica','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Inmunología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina nuclear','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Microbiología y parasitología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Neurofisiología clínica','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Radiología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Algeolgía','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Proctología','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Fisiatria','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Radiologia Intervencionista','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Cirugía cardiovascular','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Odontología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Medicina General','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Quiropraxia','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Otro','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Psicología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Podología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Neuropsicología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Neuroftalmologia ','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Cirugía Vascular Periferica','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Retinología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'fonoaudiología','is_surgical'=>'0']);
        MedicalSpeciality::create(['name'=>'Ortopedia - Cirugía de Mano','is_surgical'=>'1']);
        MedicalSpeciality::create(['name'=>'Optometrista','is_surgical'=>'0']);

    }
}
