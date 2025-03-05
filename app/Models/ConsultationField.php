<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationField extends BaseModel
{
    protected $guarded=['id'];

    public function susgestion(){
        return $this->hasOne(ConsultationSusgestion::class,'consultation_field_id');
    }

    public function rapidAccess(){
        return $this->hasMany(RapidAccess::class);
    }
}
