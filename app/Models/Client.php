<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends BaseModel
{
    public function patients(){
        return $this->belongsToMany(Patient::class,'patient_clients');
    }
}
