<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientNote extends BaseModel
{
    protected $table='patient_notes';
    protected $fillable=['patient_id','user_id','note','status'];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
