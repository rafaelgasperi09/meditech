<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationData extends BaseModel
{
    protected $table='consultation_data';

    public function consultation(){
        return $this->belongsTo(Consultation::class);
    }

    public function consultationField(){
        return $this->belongsTo(ConsultationField::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function record(){
        return $this->belongsTo($this->model_name,'record_id');
    }

    public function diagnostic(){
        return $this->belongsTo(Diagnostic::class);
    }


}
