<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentDetailFile extends BaseModel
{
    protected $table='appointment_detail_files';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }

    public function appointmentDetail(){
        return $this->belongsTo(AppointmentDetail::class);
    }
}
