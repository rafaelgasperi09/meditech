<?php

namespace Database\Seeders;

use App\Models\Diagnostic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = public_path('icd10.csv');
        $handle = fopen($filename, 'r');

        if ($handle) {
            $i=0;
            while (($line = fgetcsv($handle, 4000, '*')) !== FALSE) {
                if($i>0){
                    //print_r($line); // Procesa los datos como un array

                    $code = str_replace('"','',$line[0]);

                    if(!Diagnostic::whereCode($code)->first()){
                        //dd($line);
                        Diagnostic::create([
                            'code'=>$code,
                            'icd10_code'=>$code,
                            'description'=>$line[1],
                            'description_es'=>$line[3],
                            'user_id'=>1,
                        ]);

                        $this->command->info('Diagnostico creado :'.$code);
                    }else{
                        $this->command->warn('Cpt code '.$code.' Ya registrado');
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
