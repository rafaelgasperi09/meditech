<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends BaseModel
{
    use HasFactory;

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function consultingRooms(){
        return $this->hasMany(ConsultingRoom::class);
    }
}
