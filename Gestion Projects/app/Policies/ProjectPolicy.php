<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;
    /*allow all projects actions to admin and manager except MyProjects(for project manager)*/

      public function index(User $user){
        if(!$user->guest()){
          return true;
        }
      }

      public function create(User $user){
        if($user->Auth_hasRole('EMPLOYEE')){
          return false;
        }
      }
      public function show(User $user, Project $project){
        if(!$user->guest()){
          return true;
        }
      }
      public function ManagerProjets(User $user, Project $project){
        if($user->Auth_hasRole('PROJECT_MANAGER')){
           return true;
        }
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
