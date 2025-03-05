<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RapidAccess extends BaseModel
{
    protected $table='rapid_access';

    public function consultationField(){
        return $this->belongsTo(ConsultationField::class);
    }

    public function cpt(){
        return $this->belongsTo(Cpt::class);
    }
}
