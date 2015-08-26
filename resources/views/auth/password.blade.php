@extends('themes.default1.layouts.login')

@section('body')

<body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Asset</b> Lion</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Get Password</p>
        @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <b>Alert!</b> Success.
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Password Reset link has been send to your email
                    </div>
                    @endif
                    <!-- fail message -->
                    @if(Session::has('fails'))
                    <div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <b>Alert!</b> Failed.
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('fails')}}
                    </div>
                    @endif
        <!-- form open -->
        {!!  Form::open(['url'=>'password/email', 'method'=>'post']) !!}
          <!-- Email -->
          <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">

			{!! Form::text('email',null,['placeholder'=>'Email','class' => 'form-control']) !!}
			{!! $errors->first('email', '<spam class="help-block">:message</spam>') !!}
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>

          </div>
          <div class="form-group">

                   <a href="{{url('/')}}">Login</a>

          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Send</button>
          </div><!-- /.col -->

       </div>
    </div>
</body>




@stop