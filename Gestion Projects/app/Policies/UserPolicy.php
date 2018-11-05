<?php

namespace App\Policies;
use Auth;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

	public function showProfile(User $user,User $usertarget){
    if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')){
        return true;
    }
       return false;
  }

    public function index(User $user){
      if(!Auth::guest()){
        if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')){
            return true;
        }
           return false;
      }    
         return false;
    }

    public function create(User $user){
      if(!Auth::guest()){
        if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')) {
            return true;
        }
           return false;
      }
           return false;
    }

  public function show(User $user, User $usertarget){/*auth profile*/

        return true;
  }

  public function edit(User $user, User $usertarget){
    if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')) {
        return true;
    }
       return false;
  }

  	public function editPassword(User $user){/*forgotten password*/
      if ($user->guest()){ return true; }

    }

    public function update_avatar(User $user, User $usertarget)
  	{
            return true;

    }
    public function updatePassword(User $user, User $usertarget)
  	{
       if ($user->guest()){ return true; }

    }

    public function delete(User $user, User $usertarget)
    {
      if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')) {
          return true;
      }
          return false;
    }
}
