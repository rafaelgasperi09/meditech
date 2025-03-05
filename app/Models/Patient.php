<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends BaseModel
{
    protected $fillable=['first_name','last_name','id_type','id_number','birthdate','gender','physical_address','phone','whatsapp','email','status','retired','blood_type'];


    public function clients(){
        return $this->belongsToMany(Client::class,'patient_clients');
    }

    public function diagnostics(){
        return $this->belongsToMany(Diagnostic::class,'patient_diagnostics');
    }

    public function insurances(){
        return $this->belongsToMany(Insurance::class,'patient_insurances');
    }
}
