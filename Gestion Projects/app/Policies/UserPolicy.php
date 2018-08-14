<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    /*allow all actions to admin */
        public function before($user, $ability){
          if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER') {
              return true;
          }else {  return false; }

      }


	public function showprofile(User $user, User $user){
     if (!$user->guest()){ return false; }
  }
   public function update_avatar(User $user, User $user){
    if (!$user->guest()){ return false; }
  }

    public function index(User $user){
        //
    }

    public function create(User $user){

    }
	public function store(User $user, User $user){

  }

  public function show(User $user, User $user){

  }
  public function edit(User $user, User $user){

  }
  	public function editPassword(User $user){
     if ($user->guest()){ return true; }

    }
    public function updatePassword(User $user, User $user)
  	{
       if ($user->guest()){ return true; }

    }
    public function update(User $user, User $user)
    {

    }
    public function delete(User $user, User $user)
    {
        //
    }
}
