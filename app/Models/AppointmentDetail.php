<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AppointmentDetail extends BaseModel
{
    protected $table='appointment_details';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }

    public function consultationData(){
        return $this->belongsTo(ConsultationData::class);
    }

    public function cpt(){
        return $this->belongsTo(Cpt::class);
    }

    public function statuses(){
        return $this->hasMany(AppointmentDetailStatus::class);
    }

    public function files(){
        return $this->hasMany(AppointmentDetailFile::class);
    }
}
