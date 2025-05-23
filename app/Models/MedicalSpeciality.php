<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalSpeciality extends Model
{
    protected $table='medical_specialties';
    protected $guarded=['id'];

    public function getFullNameAttribute() {
        return $this->id . ' | ' . $this->name;
    }
}
