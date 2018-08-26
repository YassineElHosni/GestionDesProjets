<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
			 'title','description','limitDate','startDate','finishDate','displacement',
			 'state','comment','user_id','client_id'
				 ];
		public $timestamps = true;

	public function tasks(){
		return $this->hasMany('App\Task');
	}

	public function clients(){
		return $this->belongsTo('App\Client');
	}
	/*
	* Once th project is clotured a finished Date must be defined
	*/
	public function projetClos()
	{
		if($this->state==0){/*si le projet est clos*/
			return true;
			 /*  $project->finishDate=date('Y-m-d H:i:s');on precise la date de fin*/
		}else{
			return false;
			// $project->finishDate='0000-00-00 00:00:00';
		}
	}
}
