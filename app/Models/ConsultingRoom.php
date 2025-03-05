<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultingRoom extends BaseModel
{
    protected $fillable=['id','branch_id','name','number','floor','active'];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
