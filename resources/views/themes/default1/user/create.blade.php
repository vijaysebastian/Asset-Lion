@extends('themes.default1.project.list')
@section('content')


 <div class="row" style="padding-left: 70px;">
    <div class="col-md-12">
   
<div class="box box-primary">

  <div class="content-header">

    <h4>User</h4>

  </div>

<div class="box-body">

    <div class="row">

    {!!Form::open(['url'=>'auth/register','method'=>'post'])!!}
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-control-default">
                        <label for="exampleInputFirstName">First name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-control-default">
                        <label for="exampleInputLastName">Last name</label>
                        <input type="text" name="last_name" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-control-default required">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group form-control-default required">
                    <label for="exampleInputEmail1">Role</label>
                    {!! Form::select('authority',['user'=>'User','builder'=>'Builder'],null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group form-control-default required">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group form-control-default required">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}


</div>
</div>
</div>
</div>
</div>


@stop