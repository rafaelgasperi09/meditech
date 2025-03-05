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
            'answser'=>'The patient is alert, cooperative and oriented and in no acute distress.',
            'answser_esp'=>'El paciente está alerta, cooperativo y orientado y no sufre una angustia aguda.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>26,
            'answser'=>'Head is normocephalic. No evidence of trauma. Ears: No acute purulent discharge.Eyes:PER: 4mm, conjunctivae with no scleral jaundice.Nose:Normal mucosa and septum. EOMI, no hyperemia exudates or hemorrhages.',
            'answser_esp'=>'La cabeza es normocefálica. Sin evidencia de trauma. Oídos: Sin secreción purulenta aguda. Ojos: PER: 4 mm, conjuntiva sin ictericia escleral. Trufa: Mucosa y septo normales. EOMI, sin hiperemia exudados ni hemorragias.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>27,
            'answser'=>'Supple with no cervical or supraclavicular lymphadenopathy. Trachea is midline.Thyroid:Not palpable. No carotid murmur.',
            'answser_esp'=>'Flexible sin adenopatías cervicales o supraclaviculares. La tráquea es la línea media. Tiroides: No palpable. Sin soplo carotídeo.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>28,
            'answser'=>'Normal symmetrical expansion of both hemithoraces. Clear bilaterally, no rales, crackles or wheezing.',
            'answser_esp'=>'Expansión simétrica normal de ambos hemitórax. Claros bilateralmente, sin estertores, crepitantes ni sibilancias.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>29,
            'answser'=>'Regular rate and rhythm, no murmurs to auscultation, instant capillary filling, radial and femoral pulses are intact.',
            'answser_esp'=>'Frecuencia y ritmo regulares, sin soplos a la auscultación, llenado capilar instantáneo, pulsos radiales y femorales intactos.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>30,
            'answser'=>'Symmetrical bilaterally to expiration and inspiration movement.',
            'answser_esp'=>'Simétrico bilateralmente al movimiento de inspiración y espiración.',
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>31,
            'answser'=>'Soft, nontender, nondistended, nonpalpable masses with good bowel sounds heard.Inguinal area is normal. ',
            'answser_esp'=>'Se escuchan masas blandas, no dolorosas, no distendidas y no palpables con buenos ruidos intestinales. El área inguinal es normal.',
        ]);


        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>32,
            'answser'=>'No palpable lymph nodes.',
            'answser_esp'=>'No hay ganglios linfáticos palpables.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>33,
            'answser'=>'Joints without swelling or pain, complete mobility, normal muscle strength and deep tendon reflexes.',
            'answser_esp'=>'Articulaciones sin hinchazón ni dolor, movilidad completa, fuerza muscular y reflejos osteotendinosos normales.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>34,
            'answser'=>'Normal skin temperature. No edema, or superficial varicosities.',
            'answser_esp'=>'Lesión circular en la cabeza, sin descamativo, sin prurito, enrojecida con bordes definidos.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>35,
            'answser'=>'The patient is oriented to person, place and time.',
            'answser_esp'=>'El paciente está orientado a la persona, el lugar y el tiempo.'
        ]);

        ConsultationSusgestion::create([
            'type'=>'MASTER',
            'section'=>'physical_examination',
            'consultation_field_id'=>36,
            'answser'=>'Oriented 3X, denies suicidal or homicidal ideations. Insomina and anxiety.',
            'answser_esp'=>'Orientado 3X, niega ideas suicidas u homicidas. Insomnio y ansiedad.'
        ]);
    }
}
