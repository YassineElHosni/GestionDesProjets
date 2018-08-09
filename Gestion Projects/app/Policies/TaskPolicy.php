<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;
    /*allow all actions to admin */
        public function before($user, $ability){
          if ($user->Auth_hasRole('ADMIN')||
          $user->Auth_hasRole('MANAGER')||$user->Auth_hasRole('PROJECT_MANAGER')
          ||$user->Auth_hasRole('EMPLOYEE')) {
              return true;
          }
      }
      public function index(User $user)
      {

       }

       public function create(User $user)
       {
           //
       }
     public function show(User $user, Task $task)
    {
        //
    }


    public function edit(User $user, Task $task)
    {
        //
    }
    public function updateProgress(User $user, Task $task)
    {
      if ($user->Auth_hasRole('EMPLOYEE'){
          return true;
      }else {  return false; }
    }

    public function addEmployee(User $user, Task $task)
    {
      if ($user->Auth_hasRole('ADMIN')||($user->Auth_hasRole('MANAGER')
           ||($user->Auth_hasRole('PROJECT_MANAGER')){
          return true;
      }else {  return false; }
    }

    public function removeEmployee(User $user, Task $task)
    {
      if ($user->Auth_hasRole('ADMIN')||($user->Auth_hasRole('MANAGER')
           ||($user->Auth_hasRole('PROJECT_MANAGER')){
          return true;
      }else {  return false; }
    }

    public function delete(User $user, Task $task)
    {
        //
    }
}
