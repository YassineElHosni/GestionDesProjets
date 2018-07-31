<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
			 'title','description','limitDate','displacement',
			 'state','comment','user_id','client_id'
				 ];
				 
	public function tasks(){
		return $this->hasMany('App\Task');
	}

	public function clients(){
		return $this->belongsTo('App\Client');
	}
}
