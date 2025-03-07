<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class BaseModel extends Model
{
    use SoftDeletes;
    public static function boot()
    {


        parent::boot();
        static::updating(function($model)
        {
            // do some logging
            // override some property like $model->something = transform($something);
            $changes = $model->isDirty() ? $model->getDirty() : false;
            $user_id = 1;
            if(current_user()) $user_id = current_user()->id;
            if(count($changes)>0)
            {
                foreach($changes as $attr => $value)
                {
                    if($model->getOriginal($attr) <> $model->$attr && !in_array($attr,['note','DIAGNOSTIC_DESCRIPTION'])){
                        $accion = "Se modifico la columna ($attr) : de [{$model->getOriginal($attr)}] a [{$model->$attr}]";
                        $user_id = 1;
                        $user_name = 'Administrador Del Sistema';
                        if(Auth::check()){
                            $user_id= Auth::getUser()->id;
                            $user_name = Auth::getUser()->full_name;
                        }

                        return UserLog::create([
                            'user_id'=>$user_id,
                            'user_name'=>$user_name,
                            'tabla'=>$model->getTable(),
                            'table_id'=>$model->getKey(),
                            'action'=>'update',
                            'columna'=>$attr,
                            'old_value'=>$model->getOriginal($attr),
                            'new_value'=>$model->$attr,
                            'observation'=>$accion
                        ]);
                        if(($attr == 'status' OR $attr == 'estatus') && !empty($model->$attr)){
                            StatusHistoryLog::create([
                                'table_name'=>$model->getTable(),
                                'model_name'=> class_basename(get_class($model)),
                                'record_id'=>$model->getKey(),
                                'user_id'=>$user_id,
                                'new_status'=>$model->$attr,
                                'old_status'=>$model->getOriginal($attr)
                            ]);
                        }
                    }

                }
            }

        });
        static::created(function($model)
        {
            // do some logging
            // override some property like $model->something = transform($something);
            $user_id = 1;
            $user_name = 'Administrador Del Sistema';
            if(Auth::check()){
                $user_id= Auth::getUser()->id;
                $user_name = Auth::getUser()->full_name;
            }

            return UserLog::create([
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'tabla'=>$model->getTable(),
                'table_id'=>$model->getKey(),
                'action'=>'new',
                'columna'=>'',
                'old_value'=>'',
                'new_value'=>'',
                'observation'=>'Registro Creado'
            ]);

            if(Schema::hasColumn($model->getTable(),'status') && !empty($model->status)){
                StatusHistoryLog::create([
                    'table_name'=>$model->getTable(),
                    'model_name'=> class_basename(get_class($model)),
                    'record_id'=>$model->getKey(),
                    'user_id'=>$user_id,
                    'new_status'=>$model->status,
                ]);
            }
            if(Schema::hasColumn($model->getTable(),'cpt_id')){
                $cpt = Cpt::whereCode($model->cpt_code)->orderBy('id','DESC')->first();
                if($cpt && $model->cpt_id <> $cpt->id) {
                    $model->cpt_id = $cpt->id;
                    $model->save();
                }
            }
        });
        static::deleted(function($model)
        {
            // do some logging
            // override some property like $model->something = transform($something);
            $user_id = 1;
            $user_name = 'Administrador Del Sistema';
            if(Auth::check()){
                $user_id= Auth::getUser()->id;
                $user_name = Auth::getUser()->full_name;
            }

            return UserLog::create([
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'tabla'=>$model->getTable(),
                'table_id'=>$model->getKey(),
                'action'=>'Registro eliminado',
                'columna'=>'',
                'old_value'=>'',
                'new_value'=>'',
                'observation'=>'Registro Creado'
            ]);
        });
    }

    public function getCreatedAtAttribute($attr) {
        return Carbon::parse($attr)->format('d-m-Y'); //Change the format to whichever you desire
    }

    public function getUpdatedAtAttribute($attr) {
        return Carbon::parse($attr)->format('d-m-Y'); //Change the format to whichever you desire
    }

    public function files(){
        return $this->hasMany(File::class)->where('table_name',$this->getTable());
    }
}
