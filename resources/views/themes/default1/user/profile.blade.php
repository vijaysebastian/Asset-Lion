@extends('themes.default1.project.list')
@section('content')

<style>
  #panel-title-left {
    font-size: 23px;
    padding: 3px;
  }

  .panel-heading-left{
    font-size: 14px;
    color: #26a69a;
    padding: 8px;
    border: 0px;
  }
  .panel-body-padding{
   padding: 0px 16px 16px 16px; 
  }
  
  hr{
    padding: 0px;
  }

  </style>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <aside class="sidebar right sidebar-size-xs-1 sidebar-size-lg-48pc sidebar-size-40pc sidebar-offset-0 sidebar-skin-white sidebar-visible-desktop" id=sidebar-edit data-toggle-layout=true data-toggle-bar=true>
      <div data-scrollable>

      {!! Form::model($user,['url'=>'password' , 'method' => 'PATCH','enctype'=>'multipart/form-data', 'files'=>true]) !!}
        <!-- old password -->
  <div class="form-group has-feedback form-control-default {{ $errors->has('old_password') ? 'has-error' : '' }}">
      {!! Form::label('old_password','Old Password') !!}
            {!! Form::password('old_password',['placeholder'=>'Password','class' => 'form-control']) !!}
      {!! $errors->first('old_password', '<spam class="help-block">:message</spam>') !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <!-- new password -->
    <div class="form-group has-feedback form-control-default {{ $errors->has('new_password') ? 'has-error' : '' }}">
        {!! Form::label('new_password','New Password') !!}
            {!! Form::password('new_password',['placeholder'=>'New Password','class' => 'form-control']) !!}
      {!! $errors->first('new_password', '<spam class="help-block">:message</spam>') !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
  <!-- cofirm password -->
    <div class="form-group has-feedback form-control-default {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
        {!! Form::label('confirm_password','Confirm Password') !!}
            {!! Form::password('confirm_password',['placeholder'=>'Confirm Password','class' => 'form-control']) !!}
      {!! $errors->first('confirm_password', '<spam class="help-block">:message</spam>') !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

          <div class="sidebar-block equal-padding">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        {!! Form::close() !!}
      </div>
    </aside>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content" style="overflow:scroll;">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content padding-top-none" id="content">

       


<div class="panel panel-default" style="margin-bottom: 0px;">

{!! Form::model($user,['url'=>'profile' , 'method' => 'PATCH','enctype'=>'multipart/form-data', 'files'=>true]) !!}

           <div class="form-group form-control-default {{ $errors->has('first_name') ? 'has-error' : '' }}">
    <!-- first name -->
      {!! Form::label('first_name','First Name') !!}
      {!! $errors->first('first_name', '<spam class="help-block">:message</spam>') !!}
      {!! Form::text('first_name',null,['class' => 'form-control']) !!}

    </div>

    <div class="form-group  form-control-default {{ $errors->has('last_name') ? 'has-error' : '' }}">
    <!-- last name -->
      {!! Form::label('last_name','Last Name') !!}
      {!! $errors->first('last_name', '<spam class="help-block">:message</spam>') !!}
      {!! Form::text('last_name',null,['class' => 'form-control']) !!}

    </div>

    


    <div class="form-group form-control-default">
    <!-- email -->
      {!! Form::label('email','Email') !!}
      <div>
        {{$user->email}}
      </div>
    </div>

   

  <div class="form-group form-control-default {{ $errors->has('profile_pic') ? 'has-error' : '' }}">
  <!-- profile pic -->
    {!! Form::label('profile_pic','Profile Picture') !!}
    {!! $errors->first('profile_pic', '<spam class="help-block">:message</spam>') !!}
    {!! Form::file('profile_pic') !!}

  </div>
          
           <div class="panel-title">
         
          <div class="panel-body-padding">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </div>
       
       {!! Form::close() !!}
              
            
          </div>


        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

@stop