<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function booted()
    {
        if(auth()->check() && auth()->user()->hasRole('cliente')){
            self::addGlobalScope('client_filter', function ($query){
                $query->whereHas("clients",function ($q){
                    $q->whereIn('client_id',auth()->user()->clients()->pluck('client_id'));
                });
            });
        }
    }

    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function clients(){
        return $this->belongsToMany(Client::class,'user_clients');
    }

    public function cpts(){
        return $this->belongsToMany(Cpt::class,'user_cpts');
    }

    public function getProfileNameAttribute(){
        $path = url('assets/img/profiles/avatar-02.jpg');
        if($this->profile_picture) $path = url('storage/'.$this->profile_picture);

        return '<div class="profile-image">
                  <a href="'.url('patient/'.$this->id.'/pofile').'" >
                                        <img width="28" height="28" src="'.$path.'" class="rounded-circle m-r-5" alt="" style="display:inline-block;">
                                        '.$this->first_name.' '.$this->last_name.'
                                    </a>
                    </div>';
    }

}
