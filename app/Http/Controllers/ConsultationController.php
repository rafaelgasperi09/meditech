<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\ConsultationField;
use App\Models\ConsultationFieldTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function create(){

        $data=array();
        $consultation_template = ConsultationFieldTemplate::whereUserId(Auth::getUser()->id)->pluck('consultation_field_id');
        $info = ConsultationField::when($consultation_template->count()>0,function ($q) use($consultation_template){
            $q->whereIn('id',$consultation_template);
        })->get();

        foreach ($info as $d){
            $data[$d->section][$d->id] = $d;
        }

        return view('consultations.create',compact('data'));
    }
}
