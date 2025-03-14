<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationSusgestion extends BaseModel
{
    protected $fillable=['type','section','client_id','user_id','consultation_field_id','answer','answer_esp','active'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function consultationField(){
        return $this->belongsTo(ConsultationField::class);
    }
}
