<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;
use Calendar;
use Validator;
class CalendarController extends Controller
{

    public function index()
    {
      $projects=Project::get();
      $project_list=[];
      foreach($projects as $key=>$project){
         $project_list[]=\Calendar::event(
             $project->title,
             true,/*all the day (we shld limite the hours of work)*/
             $project->startDate,
             $project->limitDate

         );
      }
      $calendar_details=\Calendar::addEvents($project_list);
       return view('Calendars.ProjectsCalendar',compact('calendar_details'));
    }
}
