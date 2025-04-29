<?php

namespace App\Http\Controllers;

use App\Models\ConsultingRoom;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create(){
        return view('clients.rooms.create');
    }

    public function store(Request $request){

    }

    public function edit($id){

        $data = ConsultingRoom::find($id);

        return view('clients.rooms.edit',compact('data'));
    }

    public function update(Request $request,$id){

    }

    public function destroy($id){

        $data = ConsultingRoom::find($id);
        $data->delete();

        return redirect(route('clients.index'));
    }
}
