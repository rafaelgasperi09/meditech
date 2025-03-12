<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends BaseModel
{

    use HasFactory;

    public function patients(){
        return $this->belongsToMany(Patient::class,'patient_clients');
    }

    public function users(){
        return $this->belongsToMany(User::class,'user_clients');
    }

    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
