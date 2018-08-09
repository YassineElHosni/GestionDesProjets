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
          <h2 style="color :gray" class="ml-5">Mon Profile</h2>
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

              <h3>Personal info</h3><br>

              <form class="form-horizontal" role="form">
                <div class="form-group form-inline">
                  <label class="col-lg-3 control-label">Nom:</label>
                  <div class="col-lg-8" >
                    <input type="text" class="form-control sm-2" name="name" value="{{$user->name}}" disabled>
                  </div>
                </div>

                <div class="form-group form-inline">
                  <label class="col-lg-3 control-label">Role:</label>
                  <div class="col-lg-8" >
                  <input type="text" class="form-control sm-2" value="{{$user->role}}" disabled>
                  </div>
                </div>


                <div class="form-group form-inline">
                  <label class="col-lg-3 control-label">Email:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control sm-2" name="email"  value="{{$user->email}}" disabled>
                  </div>
                </div>

            </form>
      </div>
    </div>
  </div>
      <hr>
      <form action="{{ route('Users.edit',$user->id) }}" method="get">
        <input type="submit" class="btn btn-primary float-right" value="Modifier">
      </form>
@endsection
