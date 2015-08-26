@extends('themes.default1.layouts.master')
@section('header')

    <h1>
        Project Register 
        <small> Form</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project Register</li>
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
{!! Form::open(['url'=>'projects' , 'method' => 'POST','enctype'=>'multipart/form-data', 'files'=>true]) !!}
        
        <div class="box box-primary">

            <div class="box-body">

            <div class="row">

                <div class="col-md-3 form-group {{ $errors->has('title') ? 'has-error' : '' }}" >

                    {!! Form::label('title','Project Title') !!}
                    {!! $errors->first('title', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('title',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>

                <div class="col-md-3 form-group {{ $errors->has('slug') ? 'has-error' : '' }}" >

                    {!! Form::label('slug','Slug') !!}
                    {!! $errors->first('slug', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('slug',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-3 form-group {{ $errors->has('logo') ? 'has-error' : '' }}">

                    {!! Form::label('logo','Upload Project Logo') !!}
                    {!! $errors->first('logo', '<spam class="help-block">:message</spam>') !!}
                    <input type="file" name="logo" />

                </div>

                <div class="col-md-3 form-group {{ $errors->has('website') ? 'has-error' : '' }}" >

                    {!! Form::label('website','Project Website') !!}
                    {!! $errors->first('website', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('website',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


            </div>

            </div>

        </div>

        {{-- end --}}

        <div class="box box-primary">

            <div class="box-header">
                <h2 class="box-title">Contact Details</h2>
            </div>

            <div class="box-body">

            <div class="row">

                <div class="col-md-3 form-group {{ $errors->has('email') ? 'has-error' : '' }}" >

                    {!! Form::label('email','Email') !!}
                    {!! $errors->first('email', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('email',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-3 form-group {{ $errors->has('mobile') ? 'has-error' : '' }}" >

                    {!! Form::label('mobile','Mobile') !!}
                    {!! $errors->first('mobile', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('mobile',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-3 form-group {{ $errors->has('phone') ? 'has-error' : '' }}" >

                    {!! Form::label('phone','Phone') !!}
                    {!! $errors->first('phone', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('phone',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-3 form-group {{ $errors->has('fax') ? 'has-error' : '' }}" >

                    {!! Form::label('fax','Fax') !!}
                    {!! $errors->first('fax', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('fax',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}" >

                    {!! Form::label('address','Address of the Project') !!}
                    {!! $errors->first('address', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::textarea('address',null,['class' => 'form-control']) !!}
                
                </div>

             <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('city') ? 'has-error' : '' }}" >

                    {!! Form::label('city','City') !!}
                    {!! $errors->first('city', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('city',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('town') ? 'has-error' : '' }}" >

                    {!! Form::label('town','Town') !!}
                    {!! $errors->first('town', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('town',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('pin') ? 'has-error' : '' }}" >

                    {!! Form::label('pin','Pin Number') !!}
                    {!! $errors->first('pin', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('pin',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

            </div>

        </div>

        {{-- end contact --}}

         <div class="box box-primary">

            <div class="box-header">
                <h2 class="box-title">Location Details</h2>
            </div>

            <div class="box-body">

            <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('latitude') ? 'has-error' : '' }}" >

                    {!! Form::label('latitude','Latitude') !!}
                    {!! $errors->first('latitude', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('latitude',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('longitude') ? 'has-error' : '' }}" >

                    {!! Form::label('longitude','Longitude') !!}
                    {!! $errors->first('longitude', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('longitude',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('near_area') ? 'has-error' : '' }}" >

                    {!! Form::label('near_area','Near Area') !!}
                    {!! $errors->first('near_area', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('near_area',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

            <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('about_location') ? 'has-error' : '' }}" >

                    {!! Form::label('about_location','About Location') !!}
                    {!! $errors->first('about_location', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::textarea('about_location',null,['class' => 'form-control']) !!}
                
                </div>

            </div>

            </div>

        </div>

        {{-- end location --}}


        <div class="box box-primary">

            <div class="box-header">
                <h2 class="box-title">Project Details</h2>
            </div>

            <div class="box-body">

            <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('no_units') ? 'has-error' : '' }}" >

                    {!! Form::label('no_units','Number of Units') !!}
                    {!! $errors->first('no_units', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('no_units',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('type') ? 'has-error' : '' }}" >

                    {!! Form::label('type','Type of Project') !!}
                    {!! $errors->first('type', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('type',null,['class' => 'form-control','placeholder'=>'Villa, Flat, ....']) !!}
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('status') ? 'has-error' : '' }}" >

                    {!! Form::label('status','Status of the Project') !!}
                    {!! $errors->first('status', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('status',null,['class' => 'form-control','placeholder'=>'under custruction']) !!}
                
                </div>


             </div>

             <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('possesion_start') ? 'has-error' : '' }}" >

                    {!! Form::label('possesion_start','Possesion Start From') !!}
                    {!! $errors->first('possesion_start', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('possesion_start',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('configuration') ? 'has-error' : '' }}" >

                    {!! Form::label('configuration','Units Configuration') !!}
                    {!! $errors->first('configuration', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('configuration',null,['class' => 'form-control','placeholder'=>'1 BHK, 2 BHK, ....']) !!}
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('project_size') ? 'has-error' : '' }}" >

                    {!! Form::label('project_size','Project Size') !!}
                    {!! $errors->first('project_size', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('project_size',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

             <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('min_price') ? 'has-error' : '' }}" >

                    {!! Form::label('min_price','Minimum Price From') !!}
                    {!! $errors->first('min_price', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('min_price',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('max_price') ? 'has-error' : '' }}" >

                    {!! Form::label('max_price','Maximum Price from') !!}
                    {!! $errors->first('max_price', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('max_price',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('emi_starts') ? 'has-error' : '' }}" >

                    {!! Form::label('emi_starts','EMI Starts from') !!}
                    {!! $errors->first('emi_starts', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('emi_starts',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

             <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('carpet_min') ? 'has-error' : '' }}" >

                    {!! Form::label('carpet_min','Minimum Carpet Area') !!}
                    {!! $errors->first('carpet_min', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('carpet_min',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('carpet_max') ? 'has-error' : '' }}" >

                    {!! Form::label('carpet_max','Maximum Carpet Area') !!}
                    {!! $errors->first('carpet_max', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('carpet_max',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('land_size') ? 'has-error' : '' }}" >

                    {!! Form::label('land_size','Land total size') !!}
                    {!! $errors->first('land_size', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('land_size',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

            <div class="row">

                <div class="col-md-4 form-group {{ $errors->has('no_floor') ? 'has-error' : '' }}" >

                    {!! Form::label('no_floor','Number of Floors') !!}
                    {!! $errors->first('no_floor', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('no_floor',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group {{ $errors->has('legal_approve') ? 'has-error' : '' }}" >

                    {!! Form::label('legal_approve','Lagal approval') !!}
                    {!! $errors->first('legal_approve', '<spam class="help-block">:message</spam>') !!}
                    <div class="row">
                        <div class="col-xs-6">
                            {!! Form::radio('legal_approve','yes',true) !!}
                            <span>Yes</span>
                        </div>
                        <div class="col-xs-6">
                            {!! Form::radio('legal_approve','no') !!}
                            <span>No</span>
                        </div>
                    </div>
                
                </div>

                <div class="col-md-4 form-group {{ $errors->has('bank_approve') ? 'has-error' : '' }}" >

                    {!! Form::label('bank_approve','Bank Approval') !!}
                    {!! $errors->first('bank_approve', '<spam class="help-block">:message</spam>') !!}
                    <div class="row">
                        <div class="col-xs-6">
                            {!! Form::radio('bank_approve','yes',true) !!}
                            <span>Yes</span>
                        </div>
                        <div class="col-xs-6">
                            {!! Form::radio('bank_approve','no') !!}
                            <span>No</span>
                        </div>
                    </div>
                
                </div>


            </div>

            </div>

        </div>

        <div class="row">

          <div class="col-md-4 form-group">

          </div>

          <div class="col-md-4 form-group">

            {!! Form::submit('Save',['class'=>'form-control btn btn-primary'])!!}

          </div>

        </div>

@stop