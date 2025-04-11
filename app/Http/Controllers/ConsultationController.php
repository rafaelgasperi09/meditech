<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\ConsultationField;
use App\Models\ConsultationFieldTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function create(Request $request){

        $data=array();
        $consultation_template = ConsultationFieldTemplate::whereUserId(Auth::getUser()->id)->pluck('consultation_field_id');
        $info = ConsultationField::when($consultation_template->count()>0,function ($q) use($consultation_template){
            $q->whereIn('id',$consultation_template);
        })->get();

        foreach ($info as $d){
            $data[$d->section][$d->id] = $d;
        }

        $client_id = auth()->user()->clients()->first()->id;
        $consultationPre = Consultation::whereStatus('pre-consulta')->whereClientId($client_id)->first();
        $consultationPreApp = Consultation::whereAppointmentId($request->appointment_id)->first();
        $appointmment=Appointment::find($request->appointment_id);
        if($request->has('appointment_id') && !$consultationPreApp){
            $consultation =  Consultation::create(['client_id'=>$client_id,'appointment_id'=>$request->appointment_id,'status'=>'pre-consulta','patient_id'=>$appointmment->patient_id]);
        }else if(!$request->has('appointment_id') && !$consultationPre){
            $consultation =  Consultation::create(['client_id'=>$client_id,'status'=>'pre-consulta']);
        }else if($consultationPre){
            $consultation = $consultationPre;
        }else if($consultationPreApp){
            $consultation = $consultationPreApp;
        }

        return view('consultations.create',compact('data','consultation'));
    }
}
