<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    protected $fillable=['description','description_es','code','icd10_code','medical_speciality_id','user_id'];

    public function medicalSpeciality(){
        return $this->belongsTo(MedicalSpeciality::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute() {
        return $this->code . ' | ' . $this->description_es;
    }
}
