<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\ConsultationData;
use App\Models\ConsultationField;
use App\Models\ConsultationFieldTemplate;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function show(Request $request,$appointment_id){

        $template=array();
        $client_id = auth()->user()->clients()->first()->id;
        $appointment=Appointment::find($appointment_id);
        $patient = Patient::find($appointment->patient_id);

        $consultation = Consultation::whereAppointmentId($appointment_id)->first();

        if(!$consultation){
            $consultation =  Consultation::create(['client_id'=>$client_id,'appointment_id'=>$appointment->id,'status'=>'iniciada','patient_id'=>$patient->id]);
        }

        $consultation_template = ConsultationFieldTemplate::whereUserId(Auth::getUser()->id)->pluck('consultation_field_id');
        $info = ConsultationField::when($consultation_template->count()>0,function ($q) use($consultation_template){
            $q->whereIn('id',$consultation_template);
        })->get();

        foreach ($info as $d){

            $template[$d->section][$d->id]['input'] = $d;

            $template[$d->section][$d->id]['data']=new ConsultationData();
            $data = ConsultationData::whereConsultationId($consultation->id)->whereConsultationFieldId($d->id)->get();
            if($data) $template[$d->section][$d->id]['data'] = $data;
        }

        //dd($template);

        return view('consultations.create',compact('template','consultation','patient','appointment'));
    }
}
