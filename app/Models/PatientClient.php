<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientClient extends BaseModel
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
