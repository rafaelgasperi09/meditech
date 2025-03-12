<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends BaseModel
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

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function consultingRoom(){
        return $this->belongsTo(ConsultingRoom::class);
    }

    public function medicalspeciality(){
        return $this->belongsTo(MedicalSpeciality::class);
    }
    public function status(){
        return $this->hasMany(AppointmentStatus::class);
    }
}
