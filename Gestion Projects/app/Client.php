<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable =
	[ 'numeroClient','Nom','email','adresse','num_tel','commentaire' ];

	public function projets(){
		return $this->hasMany('App\Projet');
	}
}
