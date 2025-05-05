<?php

namespace App\Http\Controllers;

use App\Models\RapidAccess;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function consultationTemplate(){
         return view('settings.consultation.create');
    }

    public function rapidAccess(){
        return view('settings.rapidAccess.create');
    }

    public function consultationTemplateStore(Request $request){


        dd($request->all());
    }

    public function rapidAccessStore(Request $request){

    }
}
