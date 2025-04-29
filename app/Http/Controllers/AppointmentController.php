<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function index(Request $request){

        $model = Appointment::class;

        return view('appointments.index',compact('model'));
    }

    public function calendar(Request $request){

        $patient_id = $request->patient_id;
        $client_id = $request->client_id;
        $consulting_room_id = $request->consulting_room_id;
        $status='';
        if($request->has('status')) $status=$request->status;
        $hasta = \Carbon\Carbon::now()->addWeek(1)->format('Y-m-d');
        $desde = \Carbon\Carbon::now()->subWeek(3)->format('Y-m-d');
        if(!empty($request->start)) $desde = Carbon::parse($request->start)->format('Y-m-d');
        if(!empty($request->end)) $hasta =  Carbon::parse($request->end)->format('Y-m-d');

        $appointments = Appointment::when(!empty($patient_id),function ($q) use($patient_id){
                $q->where('patient_id',$patient_id);
            })
            ->when(!empty($client_id),function ($q) use($client_id){
                $q->where('client_id',$client_id);
            })
            ->when(!empty($consulting_room_id),function ($q) use($consulting_room_id){
                $q->where('consulting_room_id',$consulting_room_id);
            })
            ->when(!empty($status),function ($q) use($status){
                $q->where('status',$status);
            })
            ->whereRaw("((date_format('".$desde."','%Y-%m-%d') >= START_DATE AND date_format('".$hasta."','%Y-%m-%d') <= END_DATE)
                    OR (date_format('".$desde."','%Y-%m-%d') <= END_DATE AND date_format('".$hasta."','%Y-%m-%d') >= START_DATE))")
            ->where('status','<>','pre-programada')
            ->orderBy("start_date")
            ->get();

        $data = array();

        foreach ($appointments as $a){

            $start = Carbon::parse($a->start_date);
            $end = Carbon::parse($a->end_date);
            $data[]=[
                'title'=>'Paciente :'.$a->patient->full_name,
                'start'=>$a->start_date,
                'end'=>$a->end_date,
            ];
        }

        //dd($data);

        if($request->has('ajax'))   return response()->json($data);

        return view('appointments.calendar',compact('data','desde','hasta'));
    }

    public function create(){
        return view('appointments.create');
    }

    public function store(Request $request){

       $appointment= New Appointment();
       $fields=$request->except('_token');
       $appointment->fill($fields);
       $appointment->status='P';
       $appointment->save();

       return redirect(route('consultation.create',['id'=>$appointment->id]));
    }

    public function edit($id){

        $data = Client::find($id);

        return view('clients.edit',compact('data'));
    }

    public function update(Request $request,$id){

    }


}
