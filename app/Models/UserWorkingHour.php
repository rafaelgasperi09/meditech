<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWorkingHour extends BaseModel
{
    protected $table='user_working_hours';
    protected $fillable=['user_id','client_id','consulting_room_id','branch_id','day_of_week','start_time','end_time'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
