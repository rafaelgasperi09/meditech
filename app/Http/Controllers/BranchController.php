<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{

    public function create(){
        return view('clients.branchs.create');
    }

    public function store(Request $request){

    }

    public function edit($id){

        $data = Branch::find($id);

        return view('clients.branchs.edit',compact('data'));
    }

    public function update(Request $request,$id){

    }

    public function destroy($id){

        $data = Branch::find($id);
        $data->delete();

        return redirect(route('clients.index'));
    }
}
