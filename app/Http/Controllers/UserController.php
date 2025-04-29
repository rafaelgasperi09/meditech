<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Models\UserClient;
use App\Services\FileService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $model = User::class;

        return view('users.index',compact('model'));
    }

    public function create(){

        $selected_clients = UserClient::whereUserId(auth()->user()->id)->pluck('client_id')->toArray();

        if(auth()->user()->can('clientes')){
            $clients = Client::pluck('name','id')->toArray();
        }else{
            $clients = Client::whereIn('id',UserClient::whereUserId(auth()->user()->id)->pluck('client_id'))->pluck('name','id')->toArray();
        }
        return view('users.create',compact('clients','selected_clients'));
    }

    public function store(Request $request){

    }

    public function edit($id){

        $data = User::find($id);

        return view('users.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $fields = $request->except('id');
        if(empty($request->password))
            unset($fields['password']);
        $user->fill($fields);

        if($request->file('avatar')){
            $service = new FileService();
            $filename = 'profile_picture_'.$user->id;
            $user->profile_picture = $service->uploadSingleFile($request->file('avatar'),'users',$filename);
        }

        if($user->save()){
            $request->session()->flash('message.suucess','Actualizado con exito');
        }else{
            $request->session()->flash('message.error','¡Error!, este usuario no se puede actualizar.');
        }

        return redirect(route('user.edit',$id));
    }

    public function destroy($id){

        if(auth()->user()->id ==$id){
            session()->flash('message.error','Este usuario no se puede borrar.');
            return redirect()->back();
        }
        $data = User::find($id);
        $data->delete();

        return redirect(route('user.index'));
    }
}
