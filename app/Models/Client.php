<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends BaseModel
{

    use HasFactory;
    protected $fillable=['name','ruc','dv','long_name','email','whatsapp','image','logo'];

    public function patients(){
        return $this->belongsToMany(Patient::class,'patient_clients');
    }

    public function users(){
        return $this->belongsToMany(User::class,'user_clients');
    }

    public function branches(){
        return $this->hasMany(Branch::class);
    }

    public function getFullNameAttribute($attr) {
        return $attr->name; //Change the format to whichever you desire
    }

    public function getProfileNameAttribute(){
        $path = url('assets/img/profiles/avatar-02.jpg');
        if(!empty($this->logo)) $path = url('storage/'.$this->logo);

        return '<div class="profile-image"><img width="28" height="28" src="'.$path.'" class="rounded-circle m-r-5" alt="" style="display:inline-block;">'.$this->name.'</div>';
    }
}
