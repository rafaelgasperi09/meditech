<?php

namespace Database\Seeders;

use App\Models\ConsultationSusgestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSusgestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>25,
            'anwser'=>'The patient is alert, cooperative and oriented and in no acute distress.',
            'anwser_esp'=>'El paciente está alerta, cooperativo y orientado y no sufre una angustia aguda.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>26,
            'anwser'=>'Head is normocephalic. No evidence of trauma. Ears: No acute purulent discharge.Eyes:PER: 4mm, conjunctivae with no scleral jaundice.Nose:Normal mucosa and septum. EOMI, no hyperemia exudates or hemorrhages.',
            'anwser_esp'=>'La cabeza es normocefálica. Sin evidencia de trauma. Oídos: Sin secreción purulenta aguda. Ojos: PER: 4 mm, conjuntiva sin ictericia escleral. Trufa: Mucosa y septo normales. EOMI, sin hiperemia exudados ni hemorragias.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>27,
            'anwser'=>'Supple with no cervical or supraclavicular lymphadenopathy. Trachea is midline.Thyroid:Not palpable. No carotid murmur.',
            'anwser_esp'=>'Flexible sin adenopatías cervicales o supraclaviculares. La tráquea es la línea media. Tiroides: No palpable. Sin soplo carotídeo.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>28,
            'anwser'=>'Normal symmetrical expansion of both hemithoraces. Clear bilaterally, no rales, crackles or wheezing.',
            'anwser_esp'=>'Expansión simétrica normal de ambos hemitórax. Claros bilateralmente, sin estertores, crepitantes ni sibilancias.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>29,
            'anwser'=>'Regular rate and rhythm, no murmurs to auscultation, instant capillary filling, radial and femoral pulses are intact.',
            'anwser_esp'=>'Frecuencia y ritmo regulares, sin soplos a la auscultación, llenado capilar instantáneo, pulsos radiales y femorales intactos.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>30,
            'anwser'=>'Symmetrical bilaterally to expiration and inspiration movement.',
            'anwser_esp'=>'Simétrico bilateralmente al movimiento de inspiración y espiración.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>31,
            'anwser'=>'Soft, nontender, nondistended, nonpalpable masses with good bowel sounds heard.Inguinal area is normal. ',
            'anwser_esp'=>'Se escuchan masas blandas, no dolorosas, no distendidas y no palpables con buenos ruidos intestinales. El área inguinal es normal.',
        ]);


        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>32,
            'anwser'=>'No palpable lymph nodes.',
            'anwser_esp'=>'No hay ganglios linfáticos palpables.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>33,
            'anwser'=>'Joints without swelling or pain, complete mobility, normal muscle strength and deep tendon reflexes.',
            'anwser_esp'=>'Articulaciones sin hinchazón ni dolor, movilidad completa, fuerza muscular y reflejos osteotendinosos normales.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>34,
            'anwser'=>'Normal skin temperature. No edema, or superficial varicosities.',
            'anwser_esp'=>'Lesión circular en la cabeza, sin descamativo, sin prurito, enrojecida con bordes definidos.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>35,
            'anwser'=>'The patient is oriented to person, place and time.',
            'anwser_esp'=>'El paciente está orientado a la persona, el lugar y el tiempo.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>36,
            'anwser'=>'Oriented 3X, denies suicidal or homicidal ideations. Insomina and anxiety.',
            'anwser_esp'=>'Orientado 3X, niega ideas suicidas u homicidas. Insomnio y ansiedad.'
        ]);
    }
}
