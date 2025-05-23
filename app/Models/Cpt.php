<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cpt extends Model
{
    protected $guarded=['id'];

    public function area(){
        return $this->belongsTo(CptArea::class);
    }

    public function getFullNameAttribute() {
        return $this->code . ' | ' . $this->description_es;
    }
}
