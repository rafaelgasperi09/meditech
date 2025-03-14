<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends BaseModel
{
    protected $fillable=['patient_id','appointment_id','client_id','status'];
}
