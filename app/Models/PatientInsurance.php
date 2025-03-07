<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientInsurance extends BaseModel
{

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function insurance(){
        return $this->belongsTo(Insurance::class);
    }
}
