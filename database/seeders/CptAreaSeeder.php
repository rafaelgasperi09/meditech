<?php

namespace Database\Seeders;

use App\Models\CptArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CptAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CptArea::create(['name'=>'hpphp']);
        CptArea::create(['name'=>'GENERAL MALE IMAGING STUDIES']);
        CptArea::create(['name'=>'FEMALE IMAGING STUDIES']);
        CptArea::create(['name'=>'THYROID']);
        CptArea::create(['name'=>'ORBIT, FACE']);
        CptArea::create(['name'=>'MAXILLOFACIAL & TMJ']);
        CptArea::create(['name'=>'SOFT TISSUE NECK']);
        CptArea::create(['name'=>'UPPER EXTREMITY X-RAYS']);
        CptArea::create(['name'=>'LOWER EXTREMITY X-RAYS']);
        CptArea::create(['name'=>'BRAIN AND SKULL']);
        CptArea::create(['name'=>'CERVICAL SPINE CT & MRI']);
        CptArea::create(['name'=>'CHEST']);
        CptArea::create(['name'=>'THORACIC SPINE CT & MRI']);
        CptArea::create(['name'=>'ABDOMEN PELVIS COMBINATION']);
        CptArea::create(['name'=>'TMJ']);
        CptArea::create(['name'=>'UPPER EXTREMITY CT & MRI']);
        CptArea::create(['name'=>'HUMERUS, FOREARM OR HAND']);
        CptArea::create(['name'=>'LOWER EXTREMITY CT, MRI & US']);
        CptArea::create(['name'=>'THIGH, LOWER LEG OR FOOT']);
        CptArea::create(['name'=>'BREAST']);
        CptArea::create(['name'=>'ABDOMEN']);
        CptArea::create(['name'=>'LUMBAR SPINE CT & MRI']);
        CptArea::create(['name'=>'PELVIS']);
    }
}
