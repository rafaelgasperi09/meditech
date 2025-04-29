<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Services\FileService;
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

    public function profile(Request $request,$id){
        $data = Patient::find($id);

        return view('patients.profile',compact('data'));
    }

    public function edit($id){

        $data = Patient::find($id);

        return view('patients.edit',compact('data'));
    }

    public function update(Request $request,$id){

        $model = Patient::find($id);
        $model->fill($request->all());

        if($model->save()){


            if($request->file('image')){
                $service = new FileService();
                $data['record_id'] = $model->id;
                $data['folder'] = 'patients';
                $data['type']='avatar';
                $service->guardarArchivos([$request->file('image')],$data);
            }
            $request->session()->flash('message.success','Actualización co exito.');
        }else{
            $request->session()->flash('message.success','Hubo un error y no se pudo actualizar.');
        }

        return redirect(route('patient.edit',array($id)));
    }

    public function destroy($id){

        $data = Patient::find($id);
        $data->delete();

        return redirect(route('patient.index'));
    }
}
