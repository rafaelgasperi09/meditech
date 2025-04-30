<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationFieldTemplate extends BaseModel
{
    protected $table='consultation_fields_templates';
    protected $fillable=['type','client_id','user_id','consultation_field_id'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function consultationField(){
        return $this->belongsTo(ConsultationField::class);
    }

    public function medicalSpeciality(){
        return $this->belongsTo(MedicalSpeciality::class);
    }
}
