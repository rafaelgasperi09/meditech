<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Services\FileService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        $model = Client::class;

        return view('clients.index',compact('model'));
    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){

    }

    public function edit($id){

        $data = Client::find($id);

        return view('clients.edit',compact('data'));
    }

    public function update(Request $request,$id){

        $model = Client::find($id);
        $model->fill($request->all());

        if($model->save()){


            if($request->file('logo')){
                $service = new FileService();
                $filename = 'client_logo_'.$model->id;
                $model->logo = $service->uploadSingleFile($request->file('logo'),'clients',$filename);
                $model->save();
            }
            $request->session()->flash('message.success','Actualización co exito.');
        }else{
            $request->session()->flash('message.success','Hubo un error y no se pudo actualizar.');
        }

        return redirect(route('client.edit',$id));
    }

    public function destroy($id){

        $data = Client::find($id);
        $data->delete();

        return redirect(route('client.index'));
    }
}
