<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends BaseModel
{
    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function components(){
        return $this->hasMany(MedicineActiveComponent::class);
    }

    public function getFullNameAttribute(){
        return $this->generic_name." (".$this->type." ".$this->mgs." ".$this->mgs_type.")";
    }
}
