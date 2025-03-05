<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineActiveComponent extends BaseModel
{
    protected $fillable=['medicine_id'];

    public function medicine(){
        return $this->belongsTo(Medicine::class);
    }
}
