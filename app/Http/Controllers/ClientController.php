<?php

namespace App\Http\Controllers;

use App\Models\Client;
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

    }

    public function destroy($id){

        $data = Client::find($id);
        $data->delete();

        return redirect(route('client.index'));
    }
}
