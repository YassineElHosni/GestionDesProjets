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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
    * The tache that belongs to user
    */
    public function taches(){
         return $this->belongsToMany('App\Tache')->as('tache_user')->withPivot('date_debut','date_fin')->using('App\Tache_User');

    }
}
