@extends('themes.default1.layouts.master')
@section('header')

    <h1>
        Property Register 
        <small> Form</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Property Register</li>
    </ol>


                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <!-- fail message -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                    @endif


@stop
@section('content')
{!! Form::model($property,['url'=>'property/'.$property->slug , 'method' => 'PATCH','enctype'=>'multipart/form-data', 'files'=>true]) !!}
        
        <div class="box box-primary">

            <div class="box-body">

            <div class="row">

                 <div class="col-md-4 form-group {{ $errors->has('sell_rent') ? 'has-error' : '' }}" >

                    {!! Form::label('rent_sell','Rent or sell') !!}
                    {!! $errors->first('sell_rent', '<spam class="help-block">:message</spam>') !!}
                    <div class="row">
                        <div class="col-xs-6">
                            {!! Form::radio('sell_rent','rent',true) !!}
                            <span>Rent</span>
                        </div>
                        <div class="col-xs-6">
                            {!! Form::radio('sell_rent','sell') !!}
                            <span>Sell</span>
                        </div>
                    </div>
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('slug') ? 'has-error' : '' }}" >

                    {!! Form::label('slug','Slug') !!}
                    {!! $errors->first('slug', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('slug',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('type') ? 'has-error' : '' }}" >

                    {!! Form::label('type','Type') !!}
                    {!! $errors->first('type', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('type',null,['class' => 'form-control']) !!}
                
                </div>



             </div>

             <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('project_id') ? 'has-error' : '' }}" >

                    {!! Form::label('project_id','Projects') !!}
                    {!! $errors->first('project_id', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::select('project_id',[''=>'Select a Project','Projects'=>$project->lists('title','id')],null,['class' => 'form-control']) !!}
                
                </div>                

                <div class="col-md-4 form-group {{ $errors->has('availability_date') ? 'has-error' : '' }}" >

                    {!! Form::label('availability_date','Availability Date') !!}
                    {!! $errors->first('availability_date', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('availability_date',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('year_of_construction') ? 'has-error' : '' }}" >

                    {!! Form::label('year_of_construction','Year of Construction') !!}
                    {!! $errors->first('year_of_construction', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('year_of_construction',null,['class' => 'form-control','id'=>'date1']) !!}
                
                </div>

             </div>

              <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('user_id') ? 'has-error' : '' }}" >

                    <div class="row">

                    <div class="col-md-6">

                    {!! Form::label('user_id','User') !!}
                    {!! $errors->first('user_id', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('user_id',null,['class' => 'form-control','id'=>'user']) !!}
                    </div>

                    <div class="col-md-6" style="padding-top: 24px;">
                        <a href="#" class="form-control btn btn-primary" title="delete" data-toggle="modal" data-target="#delete1"> Not a registered user </a>
                                           
                    </div>

                    </div>
                
                </div>                

                <div class="col-md-4 form-group {{ $errors->has('ownership_type') ? 'has-error' : '' }}" >

                    {!! Form::label('ownership_type','Ownership type') !!}
                    {!! $errors->first('ownership_type', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('ownership_type',null,['class' => 'form-control']) !!}
                
                </div>


               <div class="col-md-4 form-group {{ $errors->has('parking') ? 'has-error' : '' }}" >

                    {!! Form::label('parking','Parking') !!}
                    {!! $errors->first('parking', '<spam class="help-block">:message</spam>') !!}
                    <div class="row">
                        <div class="col-xs-6">
                            {!! Form::radio('parking','yes',true) !!}
                            <span>Yes</span>
                        </div>
                        <div class="col-xs-6">
                            {!! Form::radio('parking','no') !!}
                            <span>No</span>
                        </div>
                    </div>
                
                </div>

             </div>

             <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('gallery') ? 'has-error' : '' }}" >

                   {!! Form::label('gallery','Gallery') !!}
                    {!! $errors->first('gallery', '<spam class="help-block">:message</spam>') !!}
                    <input type="file" name="gallery[]" multiple/>
                
                </div>                

                <div class="col-md-4 form-group {{ $errors->has('master_plan') ? 'has-error' : '' }}" >

                    {!! Form::label('master_plan','Master Plan') !!}
                    {!! $errors->first('master_plan', '<spam class="help-block">:message</spam>') !!}
                    <input type="file" name="master_plan" />
                
                </div>

                 <div class="col-md-4 form-group {{ $errors->has('configuration') ? 'has-error' : '' }}" >

                    {!! Form::label('configuration','Configuration') !!}
                    {!! $errors->first('configuration', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('configuration',null,['class' => 'form-control']) !!}
                
                </div>

             </div>

             {!! Form::close() !!}

             <div class="col-md-4 form-group">

             </div>

             <div class="col-md-4 form-group">

                <button type="submit" class="btn btn-primary form-control">Save</button>

             </div>

            </div>

        </div>

       
 @include('themes.default1.property.userForm')

@stop

