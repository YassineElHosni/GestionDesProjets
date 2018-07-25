<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	protected $fillable = [
			 'intitulee','description','date_limite','deplacement',
			 'état','commentaire','user_id','client_id'
				 ];
	//
	public function users(){
		// return $this->belongsToMany('App\User','tache_user','tache_id','user_id')->withPivot('date_debut', 'date_fin');
		return $this->belongsToMany('App\Projet');
	}
	public function taches(){
		return $this->hasMany('App\Tache');
	}

	public function clients(){
		return $this->belongsTo('App\Client');
	}
}
