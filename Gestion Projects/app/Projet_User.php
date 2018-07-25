<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet_User extends Model
{
  protected $fillable = [ 'user_id','projet_id' ];
}
