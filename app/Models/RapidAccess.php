<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RapidAccess extends BaseModel
{
    protected $table='rapid_access';
    protected $fillable=['type','client_id','user_id','consultation_field_id','cpt_id','active'];

    public function consultationField(){
        return $this->belongsTo(ConsultationField::class);
    }

    public function cpt(){
        return $this->belongsTo(Cpt::class);
    }
}
