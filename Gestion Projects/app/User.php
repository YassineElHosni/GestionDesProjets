<?php

namespace App;
use App\Tache;
use App\Projet;
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
        'name', 'email','avatar','password','role','comment'
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
    public function tasks(){
         //return $this->belongsToMany('App\Tache','tache_user','user_id','tache_id')->withPivot('date_debut', 'date_fin');
     return $this->belongsToMany('App\Task')->withPivot('startDate','finishDate');
    }
    public function projects(){

     return $this->belongsToMany('App\Project');
    }
    /*
    *checking the role of the  authentificated user
    */
    public function Auth_hasRole($role){
      $user=User::where('id','=',auth()->id())->get();/*l'user authentifié*/

      if($user->role==$role){
        return true;
      }
        return false;
    }
    /*
    *getting the role of the  authentificated user
    */
    public static function hasRole($role){

      return User::where('role','Like',$role)->get();
    }
    


}
