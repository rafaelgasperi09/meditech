<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    protected $fillable=['description','description_es','code','icd10_code','medical_speciality_id','user_id'];
}
