<?php

namespace Database\Seeders;

use App\Models\ConsultationField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $this->enfermedad_actual();
       $this->vital_signs();
       $this->historial_medico();
       $this->historial_social();
       $this->examen_fisico();
       $this->diagnosticos();
       $this->cpts();
       $this->referencias();
       $this->medicamentos();
       $this->notas_generales();
       $this->urology();
    }
    public function enfermedad_actual(){
        /*----------- QUEJA PRINCIPAL------------*/
        ConsultationField::create([
            'name'=>'queja_principal',
            'label'=>'Queja principal',
            'section'=>'Queja Principal',
            'description'=>'',
            'type'=>'textarea',
            'length'=>1000,
            'order'=>1,
            'need_diagnostic'=>0,
        ]);
        /*----------- LOCATION------------*/
        ConsultationField::create([
            'name'=>'ubicacion',
            'label'=>'Ubicación',
            'section'=>'Enfermedad Actual',
            'description'=>'',
            'type'=>'list',
            'list_type'=>'location',
            'length'=>100,
            'order'=>2,
            'need_diagnostic'=>0,
        ]);
        /*----------- GRAVEDAD------------*/
        ConsultationField::create([
            'name'=>'gravedad',
            'label'=>'Gravedad',
            'section'=>'Enfermedad Actual',
            'description'=>'',
            'type'=>'list',
            'list_type'=>'severity',
            'length'=>100,
            'order'=>3,
            'need_diagnostic'=>0,
        ]);
        /*----------- DURACION------------*/
        ConsultationField::create([
            'name'=>'duracion',
            'label'=>'Duracion',
            'section'=>'Enfermedad Actual',
            'description'=>'',
            'type'=>'list',
            'list_type'=>'duration',
            'length'=>100,
            'order'=>4,
            'need_diagnostic'=>0,
        ]);
        /*----------- TIEMPO------------*/
        ConsultationField::create([
            'name'=>'momento',
            'label'=>'Momento',
            'section'=>'Enfermedad Actual',
            'description'=>'',
            'type'=>'list',
            'list_type'=>'timing',
            'length'=>100,
            'order'=>5,
            'need_diagnostic'=>0,
        ]);
        /*----------- FACTOR MODIFICADOR------------*/
        ConsultationField::create([
            'name'=>'agravantes',
            'label'=>'Factor de modificación (Agravantes y/o Atenuantes)',
            'section'=>'Enfermedad Actual',
            'description'=>'',
            'type'=>'text',
            'length'=>100,
            'order'=>6,
            'need_diagnostic'=>0,
        ]);
        /*----------- SINTOMAS------------*/
        ConsultationField::create([
            'name'=>'sintomas',
            'label'=>'Signos / síntomas asociados',
            'section'=>'Enfermedad Actual',
            'description'=>'',
            'type'=>'text',
            'length'=>100,
            'order'=>7,
            'need_diagnostic'=>0,
        ]);
        /*----------- DESCRIPCION ------------*/
        ConsultationField::create([
            'name'=>'descripcion',
            'label'=>'Descripción',
            'section'=>'Enfermedad Actual',
            'description'=>'',
            'type'=>'textarea',
            'length'=>500,
            'order'=>8,
            'need_diagnostic'=>0,
        ]);
    }
    public function vital_signs(){
        /*----------- PRESION ARTERIA SISTOLICA------------*/
        ConsultationField::create([
            'name'=>'presion_sistolica',
            'label'=>'Presión arterial sistólica',
            'section'=>'Signos Vitales',
            'description'=>'',
            'type'=>'number',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
        ]);
        /*----------- PRESION ARTERIA DISTOLICA------------*/
        ConsultationField::create([
            'name'=>'presion_distolica',
            'label'=>'Presión arterial diastólica',
            'section'=>'Signos Vitales',
            'description'=>'',
            'type'=>'number',
            'length'=>100,
            'order'=>2,
            'need_diagnostic'=>0,
        ]);
        /*----------- FRECUENCIA CARDIACA------------*/
        ConsultationField::create([
            'name'=>'frecuencia_cardiaca',
            'label'=>'Frecuencia cardiaca (Bpm)',
            'section'=>'Signos Vitales',
            'description'=>'',
            'type'=>'number',
            'length'=>100,
            'order'=>3,
            'need_diagnostic'=>0,
        ]);
        /*----------- FRECUENCIA RESPIRATORIA------------*/
        ConsultationField::create([
            'name'=>'frecuencia_respiratoria',
            'label'=>'Frecuencia respiratoria',
            'section'=>'Signos Vitales',
            'description'=>'',
            'type'=>'number',
            'length'=>100,
            'order'=>4,
            'need_diagnostic'=>0,
        ]);
        /*----------- TEMPERATURA------------*/
        ConsultationField::create([
            'name'=>'temperatura',
            'label'=>'Temperatura (°C)',
            'section'=>'Signos Vitales',
            'description'=>'',
            'type'=>'number',
            'length'=>100,
            'order'=>5,
            'need_diagnostic'=>0,
        ]);
        /*----------- PESO------------*/
        ConsultationField::create([
            'name'=>'peso',
            'label'=>'Peso (Kg)',
            'section'=>'Signos Vitales',
            'description'=>'',
            'type'=>'number',
            'length'=>100,
            'order'=>6,
            'need_diagnostic'=>0,
        ]);
        /*----------- ALTURA------------*/
        ConsultationField::create([
            'name'=>'altura',
            'label'=>'Altura (cm)',
            'section'=>'Signos Vitales',
            'description'=>'',
            'type'=>'number',
            'length'=>100,
            'order'=>7,
            'need_diagnostic'=>0,
        ]);
    }
    public function historial_medico(){

        /*----------- CIRUGIAS------------*/
        ConsultationField::create([
            'name'=>'cirugias',
            'label'=>'Cirugía',
            'section'=>'Historial médico anterior',
            'description'=>'',
            'type'=>'text',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
        /*----------- ALERGIAS------------*/
        ConsultationField::create([
            'name'=>'alergias',
            'label'=>'Alergias',
            'section'=>'Historial médico anterior',
            'description'=>'',
            'type'=>'text',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
        /*----------- MEDICAMENTO------------*/
        ConsultationField::create([
            'name'=>'medicamento',
            'label'=>'Medicamento',
            'section'=>'Historial médico anterior',
            'description'=>'',
            'type'=>'text',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
        /*----------- Otros------------*/
        ConsultationField::create([
            'name'=>'otros_hms',
            'label'=>'Otros',
            'section'=>'Historial médico anterior',
            'description'=>'',
            'type'=>'text',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
    }
    public function historial_social(){

        /*----------- Antecendentes Familiares------------*/
        ConsultationField::create([
            'name'=>'antecedentes_familiares',
            'label'=>'Antecendentes Familiares',
            'section'=>'Historial social y familiar',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
        /*----------- Alcohol------------*/
        ConsultationField::create([
            'name'=>'alcohol',
            'label'=>'Alcohol',
            'section'=>'Historial social y familiar',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
        /*----------- Drogas------------*/
        ConsultationField::create([
            'name'=>'drogas',
            'label'=>'Drogas',
            'section'=>'Historial social y familiar',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
        /*----------- Tabaco------------*/
        ConsultationField::create([
            'name'=>'Tabaco',
            'label'=>'Tabaco',
            'section'=>'Historial social y familiar',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
        /*----------- Otros------------*/
        ConsultationField::create([
            'name'=>'otros_hfs',
            'label'=>'Otros',
            'section'=>'Historial social y familiar',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'prefill_with_last'=>1,
        ]);
    }
    public function examen_fisico(){

        /*----------- Constitucional (Constitutional)------------*/
        ConsultationField::create([
            'name'=>'constitucional',
            'label'=>'Constitucional (Constitutional)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- (H.E.E.N.T)------------*/
        ConsultationField::create([
            'name'=>'heent',
            'label'=>'Examen de Cabeza,ojos, oídos, nariz y garganta (H.E.E.N.T)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>2,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Cuello (Neck)------------*/
        ConsultationField::create([
            'name'=>'neck',
            'label'=>'Cuello (Neck)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>3,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);

        /*----------- Pulmonar (Pulmonary)------------*/
        ConsultationField::create([
            'name'=>'pulmunary',
            'label'=>'Pulmonar (Pulmonary)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>4,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Cardiovascular (Cardiovascular)------------*/
        ConsultationField::create([
            'name'=>'cardiovascular',
            'label'=>'Cardiovascular (Cardiovascular)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>5,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Pecho/Senos (Chest/Breast)------------*/
        ConsultationField::create([
            'name'=>'chest_breast',
            'label'=>'Pecho/Senos (Chest/Breast)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>6,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Gastrointestinal------------*/
        ConsultationField::create([
            'name'=>'gastroinstestinal',
            'label'=>'Gastrointestinal',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>7,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Linfático (Lymphatic)------------*/
        ConsultationField::create([
            'name'=>'lymphatic',
            'label'=>'Linfático (Lymphatic)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>8,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Musculoesquelético (Musculoskeletal) ------------*/
        ConsultationField::create([
            'name'=>'musculoskeletal',
            'label'=>'Musculoesquelético (Musculoskeletal)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>9,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Piel (Skin) ------------*/
        ConsultationField::create([
            'name'=>'skin',
            'label'=>'Piel (Skin)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>10,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Neurológico (Neurologic) ------------*/
        ConsultationField::create([
            'name'=>'neurologic',
            'label'=>'Neurológico (Neurologic)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>11,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Psiquiátrico (Psychiatric) ------------*/
        ConsultationField::create([
            'name'=>'psychiatric',
            'label'=>'Psiquiátrico (Psychiatric)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>12,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
        /*----------- Examen ampliado (Expanded Examination) ------------*/
        ConsultationField::create([
            'name'=>'expanded_examination',
            'label'=>'Examen ampliado (Expanded Examination)',
            'section'=>'Examen físico',
            'description'=>'',
            'type'=>'textarea',
            'length'=>100,
            'order'=>13,
            'need_diagnostic'=>0,
            'has_susgestion'=>1,
        ]);
    }
    public function diagnosticos(){
        /*----------- Diagnosticos------------*/
        ConsultationField::create([
            'name'=>'disability',
            'label'=>'Diagnosticos',
            'section'=>'Diagnosticos',
            'description'=>'',
            'type'=>'api',
            'api_path'=>'api/diagnostics',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>0,
            'ask_preoperative'=>1,
        ]);
        /*----------- NOTAS Diagnosticos ------------*/
        ConsultationField::create([
            'name'=>'notas_procedimientos',
            'label'=>'Notas',
            'section'=>'Diagnosticos',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
    }
    public function cpts(){
        /*----------- LABORATORIOS ------------*/
        ConsultationField::create([
            'name'=>'laboratorio',
            'label'=>'Laboratorios',
            'section'=>'Laboratorios',
            'description'=>'',
            'type'=>'api',
            'api_path'=>'api/cpts/laboratory',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>1,
        ]);
        /*----------- NM LABORATORIOS ------------*/
        ConsultationField::create([
            'name'=>'nm_laboratorios',
            'label'=>'Necesidad Médica',
            'section'=>'Laboratorios',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
        /*----------- NOTAS LABORATORIOS ------------*/
        ConsultationField::create([
            'name'=>'notas_laboratorios',
            'label'=>'Notas',
            'section'=>'Laboratorios',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
        /*----------- IMAGES ------------*/
        ConsultationField::create([
            'name'=>'image',
            'label'=>'Imagenes',
            'section'=>'Imagenes',
            'description'=>'',
            'type'=>'api',
            'api_path'=>'api/cpts/images',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>1,
        ]);
        /*----------- NM IMAGES ------------*/
        ConsultationField::create([
            'name'=>'nm_images',
            'label'=>'Necesidad Médica',
            'section'=>'Imagenes',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
        /*----------- NOTAS IMAGES ------------*/
        ConsultationField::create([
            'name'=>'notas_images',
            'label'=>'Notas',
            'section'=>'Imagenes',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
        /*----------- PROCEDIMIENTOS ------------*/
        ConsultationField::create([
            'name'=>'procedimiento',
            'label'=>'Procedimientos',
            'section'=>'Procedimientos',
            'description'=>'',
            'type'=>'api',
            'api_path'=>'api/cpts/procedure',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>1,
            'ask_qty'=>1,
        ]);
        /*----------- NM PROCEDIMIENTOS ------------*/
        ConsultationField::create([
            'name'=>'nm_procedimientos',
            'label'=>'Necesidad Médica',
            'section'=>'Procedimientos',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
        /*----------- NOTAS PROCEDIMIENTOS ------------*/
        ConsultationField::create([
            'name'=>'notas_procedimientos',
            'label'=>'Notas',
            'section'=>'Procedimientos',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
    }
    public function referencias(){
        /*----------- REFERENCIAS ESPECIALISTAS ------------*/
        ConsultationField::create([
            'name'=>'especialidad',
            'label'=>'Especialidad',
            'section'=>'Referir Especialista',
            'description'=>'',
            'type'=>'api',
            'api_path'=>'api/medical_speciality',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>1,
            'ask_notes'=>1
        ]);
        /*----------- NM REFERENCIAS ESPECIALISTAS ------------*/
        ConsultationField::create([
            'name'=>'nm_especialista',
            'label'=>'Necesidad Médica',
            'section'=>'Referir Especialista',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
        ]);
    }
    public function medicamentos(){
        /*----------- MEDICAMENTOS ------------*/
        ConsultationField::create([
            'name'=>'medicines',
            'label'=>'Medicamentos',
            'section'=>'Medicamentos (MED)',
            'description'=>'',
            'type'=>'api',
            'api_path'=>'api/medicines',
            'length'=>100,
            'order'=>1,
            'need_diagnostic'=>1,
            'ask_qty'=>1,
            'ask_notes'=>1
        ]);
    }
    public function notas_generales(){
        /*----------- NOTAS GENERALES ------------*/
        ConsultationField::create([
            'name'=>'nota_generales',
            'label'=>'Notas Generales de la consulta (Recomendaciones)',
            'section'=>'Notas generales de la consulta (Recomendaciones)',
            'description'=>'',
            'type'=>'textarea',
            'length'=>4000,
            'order'=>1,
            'need_diagnostic'=>1,
            'ask_qty'=>1,
            'ask_notes'=>1
        ]);
    }

    public function urology(){
        /*----------- urology ------------*/
        ConsultationField::create([
            'name'=>'vaciado_incompleto',
            'label'=>'Vaciado incompleto',
            'label_eng'=>'Incomplete Emptying',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Con qué frecuencia ha tenido la sensación de no vaciar la vejiga?',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Nada","1":"Menos de 1 de cada 5 veces","2":"Menos de la mitad de las veces","3":"Cerca de la mitad de las veces","4":"Más de la mitad de las time","5":"Casi siempre"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"Not at all","1":"Less than 1 in 5 times","2":"Less than half the time","3":"About half the time","4=":"More than half the time","5":"Almost always"}',
            'description_eng'=>'How often have you had the sensation of not emptying your bladder?',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);

        ConsultationField::create([
            'name'=>'frecuencia',
            'label'=>'Frecuencia',
            'label_eng'=>'Frequency',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Con qué frecuencia ha tenido que orinar menos de cada dos horas?',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Nada","1":"Menos de 1 de cada 5 veces","2":"Menos de la mitad de las veces","3":"Cerca de la mitad de las veces","4":"Más de la mitad de las time","5":"Casi siempre"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"Not at all","1":"Less than 1 in 5 times","2":"Less than half the time","3":"About half the time","4=":"More than half the time","5":"Almost always"}',
            'description_eng'=>'How often have you had to urinate less than every two hours?',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);

        ConsultationField::create([
            'name'=>'intermitencia',
            'label'=>'Intermitencia',
            'label_eng'=>'Intermittency',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Con qué frecuencia ha notado que se detuvo y comenzó de nuevo varias veces al orinar?',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Nada","1":"Menos de 1 de cada 5 veces","2":"Menos de la mitad de las veces","3":"Cerca de la mitad de las veces","4":"Más de la mitad de las time","5":"Casi siempre"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"Not at all","1":"Less than 1 in 5 times","2":"Less than half the time","3":"About half the time","4=":"More than half the time","5":"Almost always"}',
            'description_eng'=>'How often have you found you stopped and started again several times when you urinated?',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);

        ConsultationField::create([
            'name'=>'urgencia',
            'label'=>'Urgencia',
            'label_eng'=>'Urgency',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Con qué frecuencia le ha resultado difícil posponer la micción?',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Nada","1":"Menos de 1 de cada 5 veces","2":"Menos de la mitad de las veces","3":"Cerca de la mitad de las veces","4":"Más de la mitad de las time","5":"Casi siempre"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"Not at all","1":"Less than 1 in 5 times","2":"Less than half the time","3":"About half the time","4=":"More than half the time","5":"Almost always"}',
            'description_eng'=>'How often have you found it difficult to postpone urination?',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);

        ConsultationField::create([
            'name'=>'flujo_debil',
            'label'=>'Flujo Débil',
            'label_eng'=>'Weak stream',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Con qué frecuencia ha tenido un chorro de orina débil?',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Nada","1":"Menos de 1 de cada 5 veces","2":"Menos de la mitad de las veces","3":"Cerca de la mitad de las veces","4":"Más de la mitad de las time","5":"Casi siempre"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"Not at all","1":"Less than 1 in 5 times","2":"Less than half the time","3":"About half the time","4=":"More than half the time","5":"Almost always"}',
            'description_eng'=>'How often have you had a weak urinary stream?',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);

        ConsultationField::create([
            'name'=>'tirante',
            'label'=>'Tirante',
            'label_eng'=>'Straining',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Con qué frecuencia ha tenido que esforzarse para empezar a orinar?',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Nada","1":"Menos de 1 de cada 5 veces","2":"Menos de la mitad de las veces","3":"Cerca de la mitad de las veces","4":"Más de la mitad de las time","5":"Casi siempre"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"Not at all","1":"Less than 1 in 5 times","2":"Less than half the time","3":"About half the time","4=":"More than half the time","5":"Almost always"}',
            'description_eng'=>'How often have you had to strain to start urination?',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);

        ConsultationField::create([
            'name'=>'noturno',
            'label'=>'Noturno',
            'label_eng'=>'Nocturia',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Cuántas veces suele levantarse por la noche para orinar?',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Nunca","1":"1 Vez","2":"2 Veces ","3":"3 Veces","4":"4 Veces","5":"5 Veces o mas"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"None","1":"1 Time","2":"2 times ","3":"3 Times","4":"4 Times","5":"5 Times or more"}',
            'description_eng'=>'How many times do you typically get up at night to urinate?',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);

        ConsultationField::create([
            'name'=>'calidad_vida_urinaria',
            'label'=>'¿Si tuviera que pasar el resto de su vida con su condición urinaria tal como está ahora, ¿cómo se sentiría al respecto?',
            'label_eng'=>'If you were to spend the rest of your life with your urinary condition just the way it is now, how would you feel about that?',
            'section'=>'Índice Internacional de Síntomas Prostáticos',
            'description'=>'¿Evaluación de la calidad de vida por síntomas urinarios',
            'type'=>'options',
            'length'=>4000,
            'order'=>1,
            'options'=>'{"0":"Encantado","1":"Complacido","2":"Más satisfecho","3":"Mixto: igualmente satisfecho/insatisfecho","4":"Más bien insatisfecho","5":"Descontento","6 ":"Terrible"}',
            'need_diagnostic'=>0,
            'ask_qty'=>0,
            'ask_notes'=>0,
            'options_eng'=>'{"0":"Delighted","1":"Pleased","2":"Mostly satisfied","3":"Mixed: Equally satisfied /dissatisfied","4":"Mostly dissatisfied","5":"Unhappy","6":"Terrible"}',
            'description_eng'=>'Assessment of quality of life due to urinary symptoms',
            'category'=>'Urologia',
            'medical_speciality_id'=>42,
        ]);
    }
}
