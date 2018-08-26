<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

      public function index(User $user)
      {
              return true;
      }
      public function MyTasks(User $user, Task $task){

           if($user->Auth_hasRole('PROJECT_MANAGER')||$user->Auth_hasRole('EMPLOYEE')) {
                return true;
           }else {  return false; }
      }

       public function create(User $user){
           if(!$user->Auth_hasRole('EMPLOYEE')){
               return true;
           }else {  return false; }
      }
     public function show(User $user, Task $task)
    {
          return true;
    }


    public function edit(User $user, Task $task)
    {
          if(!$user->Auth_hasRole('EMPLOYEE')){
              return true;
          }else {  return false; }
    }
    public function updateProgress(User $user, Task $task,User $workers )
    {
          if (in_array($user->id,$workers->id)){
              return true;
          }else {  return false; }
    }

    public function addEmployee(User $user, Task $task)
    {
        if (!$user->Auth_hasRole('EMPLOYEE')){
            return true;
        }else {  return flase; }
    }

   public function  addTaskToPrj(User $user, Task $task){
       if (!$user->Auth_hasRole('EMPLOYEE')){
           return true;
       }else {  return false; }
   }

    public function removeEmployee(User $user, Task $task)
    {
        if (!$user->Auth_hasRole('EMPLOYEE')){
            return true;
        }else {  return false; }
    }

    public function delete(User $user, Task $task)
    {
      if (!$user->Auth_hasRole('EMPLOYEE')){
          return true;
      }else {  return false; }
    }
}
