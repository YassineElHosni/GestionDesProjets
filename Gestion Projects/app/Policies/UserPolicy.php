<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

	public function showProfile(User $user, User $user){
    if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')){
        return true;
    }
       return false;
  }

   public function update_avatar(User $user, User $user){
     if (!$user->Auth_hasRole('EMPLOYEE')) {
         return true;
     }
         return false;
  }

    public function index(User $user){
      if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')){
          return true;
      }
         return false;
    }

    public function create(User $user){
      if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')) {
          return true;
      }
         return false;
    }

  public function show(User $user, User $user){/*auth profile*/

        return true;
  }

  public function edit(User $user, User $user){
    if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')) {
        return true;
    }
       return false;


  	public function editPassword(User $user){/*forgotten password*/
      if ($user->guest()){ return true; }

    }

    public function update_avatar(User $user, User $user)
  	{
            return true;

    }
    public function updatePassword(User $user, User $user)
  	{
       if ($user->guest()){ return true; }

    }

    public function delete(User $user, User $user)
    {
      if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')) {
          return true;
      }
          return false;
    }
}
