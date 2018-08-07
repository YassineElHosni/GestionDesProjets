@extends('layouts.structure')

@section('jss')
@parent
 <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
 <script>

 $(document).ready(function(){
   function selectedValue(){
     //var val =document.getElementById('role').value;
     alert($('#role'));
   }
 });
 </script>
@endsection
@section('content')
@include('flash::message')

<div class="container">

  <div class="page-header">
    <br>
          <h2 style="color :gray" class="ml-5">{{$user->name}} Profile</h2>
  </div><hr>

	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="{{URL::to('/')}}/storage/avatars/{{ $user->avatar }}" style="border-radius:50%;height:50% ;width:50%" class="img-circle" alt="avatar">
          <h6>{{$user->name}}</h6>
           <form action="{{ route('User.updateAvatar',$user->id) }}" method="post" enctype="multipart/form-data" id="form">
             <input hidden type="file" name="avatar" id="avatar" onclick="$('#pic').prepend(($('<img>',{  src:'{{URL::to('/')}}/storage/avatars/default.png' })); ">

             <div hidden id="pic" onchange="$('#form').submit();">

             </div>
            <!--  <input hidden type="submit" value="Upload" id="submit">-->

             <input  type="submit" id="new_avatar"  class="btn btn-primary" value="Change Avatar" onclick="$('#avatar').click();">
             <input  hidden value="{{ csrf_token() }}" name="_token">
           </form>
        </div>
      </div>

        <!-- edit form column -->
    <div class="col-md-9">
        <form action="{{ route('Users.update', $user) }}" method="POST" class="form-horizontal">
               <input type="hidden" name="_method" value="PUT">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <h3>Personal info</h3><br>


              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-lg-3 control-label">Nom:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control sm-2" name="name" value="{{$user->name}}">
                  </div>
                </div>

                <div class="col-sm"><!-- seen by users -->
                  <div class="form-row form-inline">
                    <div class="form-group mr-4">
                      <label class="col-lg-3 control-label col-4 mr-2">Role:</label>
                        	<input type="text" class="form-control col-8" value="{{$user->role}}" disabled>
                    </div>

                  <div class="col input-group form-inline "> <!-- seen by superiors -->
                    <?php $rolearray = array('ADMIN', 'MANAGER', 'PROJECT_MANAGER', 'EMPLOYEE'); ?>

                      <select class="custom-select col-6" id="old_role"  onchange="$('#role').val($('#old_role').val());">
                          <label class="col-lg-3 control-label col-4 mr-2">Changer Role:</label>
                         @foreach($rolearray as $i=>$value)
                             <option  value="{{$rolearray[$i]}}" {{($rolearray[$i]==$user->role)?'selected':''}} >{{ $rolearray[$i] }}</option>
                         @endforeach
                      </select>
                      <input hidden type="text" name="role"  id="role" value="{{$user->role}}">
                 </div>
               </div>
            </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Email:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="email"  value="{{$user->email}}">
                  </div>
                </div>

                <div class="form-group"> <!-- must not be seen .. change password-->
                  <label class="col-md-3 control-label">Password:</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="password"  value="{{$user->password}}">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Commentaire:</label> <!-- seen only by superiors -->
                    <div class="col-md-8">
                      <textarea type="text" class="form-control" name="comment" >{{$user->comment}}</textarea>
                    </div>
                  <hr>
                  <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                    <span></span>
                  </div>
               </div>
        </form>
    </div>
  </div>
</div>
      <hr>
@endsection
