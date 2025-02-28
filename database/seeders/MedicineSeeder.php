<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = public_path('medicines.csv');
        $handle = fopen($filename, 'r');

        if ($handle) {
            $i=0;
            while (($line = fgetcsv($handle, 4000, '*')) !== FALSE) {
                if($i>0){
                    //print_r($line); // Procesa los datos como un array


                    $code = $line[1];
                    $porpuse = '';
                    $indication_and_usage='';
                    $usage_indications='';
                    $price=null;
                    if(isset($line[9])) $porpuse = $line[9];
                    if(isset($line[10])) $indication_and_usage = $line[10];
                    if(isset($line[12])) $usage_indications = $line[12];
                    if(is_numeric($line[7]))      $price=$line[7];
                    if(!Medicine::whereNdcCode($code)->first()){
                        //dd($line);
                        Medicine::create([
                            'source'=>$line[0],
                            'ndc_code'=>$code,
                            'home_name'=>$line[2],
                            'generic_name'=>$line[3],
                            'mgs'=>$line[4],
                            'type'=>$line[5],
                            'mgs_type'=>$line[6],
                            'price'=>$price,
                            'product_type'=>$line[8],
                            'porpuse'=>$porpuse,
                            'indication_and_usage'=>$indication_and_usage,
                            'usage_indications'=>$usage_indications,
                        ]);

                        $this->command->info('Medicamento creado :'.$code);
                    }else{
                        $this->command->warn('Medicamento ndc_code '.$code.' Ya registrado');
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
