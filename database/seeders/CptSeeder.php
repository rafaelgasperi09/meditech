<?php

namespace Database\Seeders;

use App\Models\Cpt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = public_path('cpts2.csv');
        $handle = fopen($filename, 'r');

        if ($handle) {
            $i=0;
            while (($line = fgetcsv($handle, 4000, '*')) !== FALSE) {
                if($i>0){
                    //print_r($line); // Procesa los datos como un array

                    $cpt_area_id = null;
                    if(!empty($line[4]))   $cpt_area_id = str_replace('"','',$line[4]);
                    $code = str_replace('"','',$line[0]);

                    if(!Cpt::whereCode($code)->first()){
                        //dd($line);
                        Cpt::create([
                            'code'=>$code,
                            'description'=>$line[1],
                            'description_es'=>$line[2],
                            'type'=>$line[3],
                            'cpt_area_id'=>$cpt_area_id,
                            'duplicity'=>str_replace('"','',$line[5]),
                            'is_body'=>str_replace('"','',$line[6]),
                        ]);

                        $this->command->info('Cpt creado :'.$code);
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
