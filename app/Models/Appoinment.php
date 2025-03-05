<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends BaseModel
{

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
