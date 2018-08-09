<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;
    /*allow all actions to admin */
        public function before($user, $ability){
          if ($user->Auth_hasRole('ADMIN')||$user->Auth_hasRole('MANAGER')
             ||$user->Auth_hasRole('PROJECT_MANAGER')||$user->Auth_hasRole('EMPLOYEE')) {
              return true;
          }
      }
      public function index(User $user){

      }
      public function create(User $user){
        if($user->Auth_hasRole('EMPLOYEE')){
          return false;
        }
      }


      }
      public function show(User $user, Project $project){

      }
     public function edit(User $user){
       if($user->Auth_hasRole('EMPLOYEE')||$user->Auth_hasRole('PROJECT_MANAGER')){
         return false;
       }
     }

    public function delete(User $user, Project $project)
    {
      if($user->Auth_hasRole('EMPLOYEE')||$user->Auth_hasRole('PROJECT_MANAGER')){
        return false;
      }
    }
}
