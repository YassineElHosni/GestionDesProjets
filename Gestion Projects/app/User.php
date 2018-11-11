<?php

namespace App;
use App\Task;
use App\Projet;
use App\Task_User;

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
      $user=User::find(auth()->id());/*l'user authentifié*/
      
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
    
    /*
    * each user has many timers related to many task
    */
    public function timers() {
     return $this->hasMany('App\Timer');
    }

    public static function getEmployeHoursCount($id){
        $t_us = Task_User::where('user_id',$id)->get();

        // dd(Project::useData_toCalculateHoursCount($t_us));
        return Project::useData_toCalculateHoursCount($t_us);
    }

}
