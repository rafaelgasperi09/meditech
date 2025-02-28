<?php

namespace Database\Seeders;

use App\Models\Insurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Insurance::create(['name'=>'Blue Cross Blue Shield of Panama']);
        Insurance::create(['name'=>'MAPFRE']);
        Insurance::create(['name'=>'Aseguradora Ancón']);
        Insurance::create(['name'=>'Palig- Panamerican Life Insurance']);
        Insurance::create(['name'=>'Autoridad del Canal de Panamá ACP']);
        Insurance::create(['name'=>'ASSA Poliza 70b y 70BC']);
        Insurance::create(['name'=>'ASSA Poliza Generali (01-27, 01-55, 01-57 / 70G, 70GC, 70GG)']);
        Insurance::create(['name'=>'ASSA']);
        Insurance::create(['name'=>'Sagicor']);
        Insurance::create(['name'=>'SURA']);
        Insurance::create(['name'=>'VIVIR']);
        Insurance::create(['name'=>'ANCON']);
        Insurance::create(['name'=>'VUMI']);
        Insurance::create(['name'=>'BUPA']);
        Insurance::create(['name'=>'FEDPA']);
        Insurance::create(['name'=>'WORLDWIDE']);
        Insurance::create(['name'=>'FMP/VA']);
        Insurance::create(['name'=>'CHAMPVA']);
        Insurance::create(['name'=>'TRICARE']);
        Insurance::create(['name'=>'CIA INTRL']);

    }
}
