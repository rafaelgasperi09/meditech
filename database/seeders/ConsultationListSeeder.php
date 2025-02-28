<?php

namespace Database\Seeders;

use App\Models\ConsultationList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            ConsultationList::create(['type'=>'location','value'=>'sinus','value_esp'=>'senos paranasales','order'=>40]);
            ConsultationList::create(['type'=>'location','value'=>'otro','value_esp'=>'other','order'=>41]);
            ConsultationList::create(['type'=>'location','value'=>'stomach','value_esp'=>'Estomago','order'=>42]);
            ConsultationList::create(['type'=>'location','value'=>'small intestine','value_esp'=>'Intestino delgado','order'=>43]);
            ConsultationList::create(['type'=>'location','value'=>'colon','value_esp'=>'Colon','order'=>44]);
            ConsultationList::create(['type'=>'location','value'=>'anus','value_esp'=>'Ano','order'=>45]);
            ConsultationList::create(['type'=>'location','value'=>'female reproductive system','value_esp'=>'Sistema reproductor femenino','order'=>46]);
            ConsultationList::create(['type'=>'location','value'=>'male reproductive system','value_esp'=>'Sistema reproductor masculino','order'=>47]);
            ConsultationList::create(['type'=>'location','value'=>'heart','value_esp'=>'corazón','order'=>39]);
            ConsultationList::create(['type'=>'location','value'=>'lungs','value_esp'=>'pulmones','order'=>48]);
            ConsultationList::create(['type'=>'location','value'=>'mental','value_esp'=>'mental','order'=>48]);
            ConsultationList::create(['type'=>'location','value'=>'liver','value_esp'=>'hígado','order'=>48]);
            ConsultationList::create(['type'=>'location','value'=>'pancreas','value_esp'=>'páncreas','order'=>48]);
            ConsultationList::create(['type'=>'duration','value'=>'a few days ago','value_esp'=>'hace unos días','order'=>1]);
            ConsultationList::create(['type'=>'duration','value'=>'since a week ago','value_esp'=>'hace una semana','order'=>2]);
            ConsultationList::create(['type'=>'duration','value'=>'since two weeks ago','value_esp'=>'hace 2 semanas','order'=>3]);
            ConsultationList::create(['type'=>'duration','value'=>'since three weeks ago','value_esp'=>'hace 3 semanas','order'=>4]);
            ConsultationList::create(['type'=>'duration','value'=>'a month ago','value_esp'=>'hace un mes','order'=>5]);
            ConsultationList::create(['type'=>'duration','value'=>'a couple of months','value_esp'=>'hace algunos meses','order'=>6]);
            ConsultationList::create(['type'=>'duration','value'=>'past 6 months','value_esp'=>'hace 6 meses','order'=>7]);
            ConsultationList::create(['type'=>'duration','value'=>'past 6-9 months','value_esp'=>'hace 6 a 9 meses','order'=>8]);
            ConsultationList::create(['type'=>'duration','value'=>'past 9-12 months','value_esp'=>'hace 9 a 12 meses','order'=>9]);
            ConsultationList::create(['type'=>'duration','value'=>'a year or so','value_esp'=>'alrededor de un año','order'=>10]);
            ConsultationList::create(['type'=>'duration','value'=>'a year and a half','value_esp'=>'año y medio','order'=>11]);
            ConsultationList::create(['type'=>'duration','value'=>'two years','value_esp'=>'dos años','order'=>12]);
            ConsultationList::create(['type'=>'duration','value'=>'more than 2 years','value_esp'=>'más de dos años','order'=>13]);
            ConsultationList::create(['type'=>'location','value'=>'head','value_esp'=>'cabeza','order'=>1]);
            ConsultationList::create(['type'=>'location','value'=>'eye(s)','value_esp'=>'ojo(s)','order'=>2]);
            ConsultationList::create(['type'=>'location','value'=>'ear(s)','value_esp'=>'oído(s)','order'=>3]);
            ConsultationList::create(['type'=>'location','value'=>'nose','value_esp'=>'nariz','order'=>4]);
            ConsultationList::create(['type'=>'location','value'=>'mouth','value_esp'=>'boca','order'=>5]);
            ConsultationList::create(['type'=>'location','value'=>'throat','value_esp'=>'garganta','order'=>6]);
            ConsultationList::create(['type'=>'location','value'=>'neck','value_esp'=>'cuello','order'=>7]);
            ConsultationList::create(['type'=>'location','value'=>'mamary glands','value_esp'=>'glándulas mamarias','order'=>8]);
            ConsultationList::create(['type'=>'location','value'=>'axillary region','value_esp'=>'axilas','order'=>9]);
            ConsultationList::create(['type'=>'location','value'=>'chest','value_esp'=>'pecho','order'=>10]);
            ConsultationList::create(['type'=>'location','value'=>'abdomen','value_esp'=>'abdomen','order'=>1]);
            ConsultationList::create(['type'=>'location','value'=>'cervical spine','value_esp'=>'espina cervical','order'=>12]);
            ConsultationList::create(['type'=>'location','value'=>'dorsal spine','value_esp'=>'espina dorsal','order'=>13]);
            ConsultationList::create(['type'=>'location','value'=>'lumbar spine','value_esp'=>'espina lumbar','order'=>14]);
            ConsultationList::create(['type'=>'location','value'=>'sacral spine','value_esp'=>'espina sacral','order'=>15]);
            ConsultationList::create(['type'=>'location','value'=>'renal area','value_esp'=>'area renal','order'=>16]);
            ConsultationList::create(['type'=>'location','value'=>'shoulder(s)','value_esp'=>'hombro(s)','order'=>17]);
            ConsultationList::create(['type'=>'location','value'=>'forearm(s)','value_esp'=>'antebrazo(s)','order'=>18]);
            ConsultationList::create(['type'=>'location','value'=>'elbow(s)','value_esp'=>'codo(s)','order'=>19]);
            ConsultationList::create(['type'=>'location','value'=>'arm(s)','value_esp'=>'brazo(s)','order'=>20]);
            ConsultationList::create(['type'=>'location','value'=>'wrist(s)','value_esp'=>'muñeca(s)','order'=>21]);
            ConsultationList::create(['type'=>'location','value'=>'hand(s)','value_esp'=>'mano(s)','order'=>22]);
            ConsultationList::create(['type'=>'location','value'=>'hip','value_esp'=>'cadera','order'=>23]);
            ConsultationList::create(['type'=>'location','value'=>'pelvis','value_esp'=>'pelvis','order'=>24]);
            ConsultationList::create(['type'=>'location','value'=>'thighs','value_esp'=>'muslos','order'=>25]);
            ConsultationList::create(['type'=>'location','value'=>'knee(s)','value_esp'=>'rodilla(s)','order'=>26]);
            ConsultationList::create(['type'=>'location','value'=>'leg(s)','value_esp'=>'pierna(s)','order'=>27]);
            ConsultationList::create(['type'=>'location','value'=>'ankle(s)','value_esp'=>'tobillo(s)','order'=>28]);
            ConsultationList::create(['type'=>'location','value'=>'foot/feet','value_esp'=>'pie(s)','order'=>29]);
            ConsultationList::create(['type'=>'location','value'=>'left hypochondriac region','value_esp'=>'región hipocondríaca izquierda','order'=>30]);
            ConsultationList::create(['type'=>'location','value'=>'epigastric region','value_esp'=>'región epigástrica','order'=>31]);
            ConsultationList::create(['type'=>'location','value'=>'right hypochondriac region','value_esp'=>'región hipocondríaca derecha','order'=>32]);
            ConsultationList::create(['type'=>'location','value'=>'left lumbar region','value_esp'=>'región lumbar izquierda','order'=>33]);
            ConsultationList::create(['type'=>'location','value'=>'umbilical region','value_esp'=>'región umbilical','order'=>34]);
            ConsultationList::create(['type'=>'location','value'=>'right lumbar region','value_esp'=>'región lumbar derecha','order'=>35]);
            ConsultationList::create(['type'=>'location','value'=>'left iliac region','value_esp'=>'región ilíaca izquierda','order'=>36]);
            ConsultationList::create(['type'=>'location','value'=>'hypogastric region','value_esp'=>'región hipogástrica','order'=>37]);
            ConsultationList::create(['type'=>'location','value'=>'right iliac region','value_esp'=>'región ilíaca derecha','order'=>38]);
            ConsultationList::create(['type'=>'location','value'=>'full body','value_esp'=>'todo el cuerpo','order'=>39]);
            ConsultationList::create(['type'=>'severity','value'=>'disabling','value_esp'=>'incapacitante','order'=>4]);
            ConsultationList::create(['type'=>'severity','value'=>'severe','value_esp'=>'severo','order'=>3]);
            ConsultationList::create(['type'=>'severity','value'=>'moderate','value_esp'=>'moderado','order'=>2]);
            ConsultationList::create(['type'=>'severity','value'=>'mild','value_esp'=>'leve','order'=>1]);
            ConsultationList::create(['type'=>'timing','value'=>'in the morning','value_esp'=>'en la mañana','order'=>1]);
            ConsultationList::create(['type'=>'timing','value'=>'through the day','value_esp'=>'durante el día','order'=>2]);
            ConsultationList::create(['type'=>'timing','value'=>'in the afternoon','value_esp'=>'en la tarde','order'=>3]);
            ConsultationList::create(['type'=>'timing','value'=>'at night','value_esp'=>'en la noche','order'=>4]);
            ConsultationList::create(['type'=>'timing','value'=>'all day','value_esp'=>'todo el día','order'=>5]);
            ConsultationList::create(['type'=>'location','value'=>'otro','value_esp'=>'otro','order'=>39]);
            ConsultationList::create(['type'=>'location','value'=>'urinary system','value_esp'=>'sistema urinario','order'=>49]);

    }
}
