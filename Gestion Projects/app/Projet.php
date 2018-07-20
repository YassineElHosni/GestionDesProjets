<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    //
    public function users(){
        // return $this->belongsToMany('App\User','tache_user','tache_id','user_id')->withPivot('date_debut', 'date_fin');
     return $this->belongsToMany('App\Projet');
    }
}
