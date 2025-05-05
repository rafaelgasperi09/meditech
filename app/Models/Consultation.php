<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends BaseModel
{
    protected $fillable=['patient_id','appointment_id','client_id','status'];

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
