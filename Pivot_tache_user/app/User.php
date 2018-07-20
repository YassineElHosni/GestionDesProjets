<?php

namespace App;
use App\Tache;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for a66rrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
    * The tasks that belongs to user
     */
    public function taches(){
         //return $this->belongsToMany('App\Tache','tache_user','user_id','tache_id')->withPivot('date_debut', 'date_fin');
     return $this->belongsToMany('App\Tache');
    }

}