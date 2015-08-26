@extends('themes.default1.project.list')
@section('content')
<div class="box box-primary" style="padding-left: 70px;">
<div class="box-header">
    <h2 class="box-title">{{$user->first_name}} {{$user->last_name}}</h2>
</div>
<div class="row">
<div class="col-md-12">
<div class="box-body table-responsive no-padding">

   <div class="col-md-6">

          <a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-primary">Edit {{studly_case($user->first_name)}}</a>

   </div>
    <table class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

    <tbody>
            
            
            <tr><td>First Name</td><td>{{$user->first_name}}</td></tr>
            <tr><td>Last Name</td><td>{{$user->last_name}}</td></tr>
            <tr><td>Email</td><td>{{$user->email}}</td></tr>
            
            
        </tbody>

    </table>
                        
</div>
</div>
</div>
</div>

@stop