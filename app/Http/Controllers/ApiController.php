<?php

namespace App\Http\Controllers;

use App\Models\Cpt;
use App\Models\Diagnostic;
use App\Models\MedicalSpeciality;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function patients(Request $request){
        $select='*';

        if($request->has('dropdown'))
            $select = "id,concat(first_name,' ',last_name)  as name";

        $data = Patient::selectRaw($select)
            ->when($request->has('q'),function ($q) use($request){
                $q->whereRaw("(id_number LIKE '%".$request->q."%' or first_name LIKE '%".$request->q."%' or last_name LIKE '%".$request->q."%')");
            })
            ->take(10)
            ->get();


        return response()->json($data);

    }

    public function users(Request $request){
        $select='*';

        if($request->has('dropdown'))
            $select = "id,concat(first_name,' ',last_name)  as name";

        $data = User::selectRaw($select)
            ->when($request->has('role_id'),function ($q) use($request){
                $q->whereHas('roles',function ($q2) use($request){
                   $q2->where("roles.id",$request->role_id);
                });
            })
            ->when($request->has('q'),function ($q) use($request){
                $q->whereRaw("(first_name LIKE '%".$request->q."%' or last_name LIKE '%".$request->q."%')");
            })
            ->take(10)
            ->get();


        return response()->json($data);

    }

    public function diagnostics(Request $request){
        $select='*';

        if($request->has('dropdown'))
            $select = "id,concat(code,'|',description_es)  as name";

        $query = Diagnostic::selectRaw($select)
            ->when($request->has('q'),function ($q) use($request){
                $q->whereRaw("(code LIKE '%".$request->q."%' or description LIKE '%".$request->q."%' or description_es LIKE '%".$request->q."%')");
            });

           if($request->has('ramdom')) {
               $data = $query->inRandomOrder()->take(1)->first();
           }else{
               $data = $query->take(10)->get();
           }

        return response()->json($data);

    }

    public function cpts(Request $request,$type){
        $select='*';

        if($request->has('dropdown'))
            $select = "id,concat(code,'|',description_es)  as name";

        $query = Cpt::selectRaw($select)
            ->when($request->has('q'),function ($q) use($request){
                $q->whereRaw("(code LIKE '%".$request->q."%' or description LIKE '%".$request->q."%' or description_es LIKE '%".$request->q."%')");
            })
            ->whereType($type);

        if($request->has('ramdom')) {
            $data = $query->inRandomOrder()->take(1)->first();
        }else{
            $data = $query->take(10)->get();
        }

        return response()->json($data);

    }

    public function medicalSpeciality(Request $request){
        $select='*';

        if($request->has('dropdown'))
            $select = "id,name";

        $query = MedicalSpeciality::selectRaw($select)
            ->when($request->has('q'),function ($q) use($request){
                $q->whereRaw("(id LIKE '%".$request->q."%' or name LIKE '%".$request->q."%')");
            });

        if($request->has('ramdom')) {
            $data = $query->inRandomOrder()->take(1)->first();
        }else{
            $data = $query->take(10)->get();
        }

        return response()->json($data);

    }

    public function medicines(Request $request){
        $select='*';

        if($request->has('dropdown'))
            $select = "id,concat(home_name,' de ',mgs,' ',mgs_type,' en ',type) as name";

        $query = Medicine::selectRaw($select)
            ->when($request->has('q'),function ($q) use($request){
                $q->whereRaw("(ndc_code LIKE '%".$request->q."%' or home_name LIKE '%".$request->q."%' or generic_name LIKE '%".$request->q."%')");
            });

        if($request->has('ramdom')) {
            $data = $query->inRandomOrder()->take(1)->first();
        }else{
            $data = $query->take(10)->get();
        }

        return response()->json($data);

    }
}
