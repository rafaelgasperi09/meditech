<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends BaseModel
{
    use HasFactory;

    // ESTE ES EL FILTRO GLOBAL POR TIPO DE ROL DE USUARIO
    protected static function booted()
    {
        if(auth()->user() && (auth()->user()->hasRole('cliente') OR auth()->user()->hasRole('usuario'))){
            self::addGlobalScope('client_filter', function ($query){
                $query->whereIn('client_id',auth()->user()->clients()->pluck('client_id'));
            });
        }
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function consultingRooms(){
        return $this->hasMany(ConsultingRoom::class);
    }
}
