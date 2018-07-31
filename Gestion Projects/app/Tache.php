<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
  protected $fillable = [
       'description','date_limite','état',
       'déroulement','priorité','commentaire','projet_id'
         ];
    //
    /*
    * The user that concerned by many taches
   */
    public function users(){
        // return $this->belongsToMany('App\User','tache_user','tache_id','user_id')->withPivot('date_debut', 'date_fin');
     return $this->belongsToMany('App\User')->withPivot('date_debut', 'date_fin');
    }

	public function projets(){
		return $this->belongsTo('App\Projet');
	}
}
