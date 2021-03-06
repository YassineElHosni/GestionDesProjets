<?php

namespace App\Policies;
use App\Task_User;
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
      public function MyTasks(User $user){

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


    public function edit(User $user)
    {
          if(!$user->Auth_hasRole('EMPLOYEE')){
              return true;
          }else {  return false; }
    }
    public function updateProgress(User $user,Task $task )
    {
      $id_us=Task_User::where('task_id','=',$task->id)->get(['user_id']);/*get the employee related to this task*/
      $workers=User::whereIn('id', $id_us)->get(['id']);/*get infos of thoes employee from user table*/

      foreach($workers as $w){
        if($w->id == $user->id)/*check if the current user is one of the workers*/
          return true;
      }
         return false;
        //  return in_array($user,$workers);

    }

    public function addEmployee(User $user, Task $task)
    {
        if (!$user->Auth_hasRole('EMPLOYEE')){
            return true;
        }else {  return flase; }
    }

   public function  addTaskToPrj(User $user){
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
