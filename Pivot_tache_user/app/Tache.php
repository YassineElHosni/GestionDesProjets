<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    //
    /*
    * The user that concerned by many taches
   */
    public function users(){
        // return $this->belongsToMany('App\User','tache_user','tache_id','user_id')->withPivot('date_debut', 'date_fin');
     return $this->belongsToMany('App\User');
    }
}
