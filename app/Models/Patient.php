<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends BaseModel
{
    use HasFactory;
    protected $fillable=['first_name','last_name','id_type','id_number','birthdate','gender','physical_address','phone','whatsapp','email','status','retired','blood_type'];

    // ESTE ES EL FILTRO GLOBAL POR TIPO DE ROL DE USUARIO
    protected static function booted()
    {
        if(auth()->user()->hasRole('cliente') OR auth()->user()->hasRole('usuario')){
            self::addGlobalScope('client_filter', function ($query){
                $query->whereHas("clients",function ($q){
                    $q->whereIn('client_id',auth()->user()->clients()->pluck('client_id'));
                });
            });
        }
    }

    public function clients(){
        return $this->belongsToMany(Client::class,'patient_clients');
    }

    public function diagnostics(){
        return $this->belongsToMany(Diagnostic::class,'patient_diagnostics');
    }

    public function insurances(){
        return $this->belongsToMany(Insurance::class,'patient_insurances');
    }

    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFullIdNumberAttribute() {
        return $this->id_type . ':' . $this->id_number;
    }
}
