<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_User extends Model
{
    protected $fillable = [ 'user_id','task_id','startDate','finishDate' ];

	public $table = "task_user";
}
