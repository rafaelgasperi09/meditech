<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCpt extends BaseModel
{
    protected $table='user_cpts';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function cpt(){
        return $this->belongsTo(Cpt::class);
    }
}
