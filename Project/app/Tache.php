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
         return $this->belongsToMany('User')->as('tache_user')->withPivot('date_debut','date_fin')->using('Tache_User');
    }
}
