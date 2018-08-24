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
  }
   public function update_avatar(User $user, User $user){
     if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')
     ||$user->Auth_hasRole('PROJECT_MANAGER')||$user->Auth_hasRole('EMPLOYEE')) {
         return true;
     }
  }

    public function index(User $user){
      if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')){
          return true;
      }
    }

    public function create(User $user){
      if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')) {
          return true;
      }
    }

  public function show(User $user, User $user){
    if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')
    ||$user->Auth_hasRole('PROJECT_MANAGER')||$user->Auth_hasRole('EMPLOYEE')) {
        return true;
    }
  }
  public function edit(User $user, User $user){

  }
  	public function editPassword(User $user){/*mot de passeoublié*/
     if ($user->guest()){ return true; }

    }
    public function update_avatar(User $user, User $user)
  	{
      if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')
      ||$user->Auth_hasRole('PROJECT_MANAGER')||$user->Auth_hasRole('EMPLOYEE')) {
          return true;
      }
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
    }
}
