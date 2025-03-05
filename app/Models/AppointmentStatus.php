<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentStatus extends BaseModel
{
    protected $table='appointment_status';

    public function appointment(){
        return $this->belongsTo(Appoinment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
