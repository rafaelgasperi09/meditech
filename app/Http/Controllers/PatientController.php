<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $model = Patient::class;

        return view('patients.index',compact('model'));
    }

    public function create(){
        return view('patients.create');
    }

    public function store(Request $request){

    }

    public function edit($id){

        $data = Patient::find($id);

        return view('patients.edit',compact('data'));
    }

    public function update(Request $request,$id){

    }

    public function destroy($id){

        $data = Patient::find($id);
        $data->delete();

        return redirect(route('patient.index'));
    }
}
