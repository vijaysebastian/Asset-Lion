@extends('themes.default1.project.list')
@section('content')



    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <aside class="sidebar right sidebar-size-xs-1 sidebar-size-lg-48pc sidebar-size-40pc sidebar-offset-0 sidebar-skin-white sidebar-visible-desktop" id=sidebar-edit data-toggle-layout=true data-toggle-bar=true>
      <div data-scrollable>
        {!! Form::model($project,['url'=>'projects/'.$project->slug , 'method' => 'PATCH','enctype'=>'multipart/form-data', 'files'=>true]) !!}
          <div class="sidebar-block">
            <h1 class="text-h3 sidebar-heading">Create listing</h1>
          </div>
          <div class="sidebar-block">
            <h4 class="category">General information</h4>

            <div class="row">
            
                <div class="col-md-4 form-group form-control-default {{ $errors->has('title') ? 'has-error' : '' }}" >

                    {!! Form::label('title','Project Title') !!}
                    {!! $errors->first('title', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('title',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>

                <div class="col-md-4 form-group form-control-default {{ $errors->has('slug') ? 'has-error' : '' }}" >

                    {!! Form::label('slug','Slug') !!}
                    {!! $errors->first('slug', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('slug',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>

                <div class="col-md-4 form-group form-control-default {{ $errors->has('website') ? 'has-error' : '' }}" >

                    {!! Form::label('website','Project Website') !!}
                    {!! $errors->first('website', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('website',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>

            </div>

                 <div class="row">

                    <div class="col-md-6 form-group form-control-default {{ $errors->has('logo') ? 'has-error' : '' }}">

                      {!! Form::label('logo','Upload Project Logo') !!}
                      {!! $errors->first('logo', '<spam class="help-block">:message</spam>') !!}
                      <input type="file" name="logo" class="form-control" />

                    </div>

                    <div class="col-md-6 form-group form-control-default {{ $errors->has('gallery') ? 'has-error' : '' }}">

                      {!! Form::label('gallery','Upload Project Gallery') !!}
                      {!! $errors->first('gallery', '<spam class="help-block">:message</spam>') !!}
                      <input type="file" name="gallery" class="form-control"  multiple  />

                    </div>



                  </div>

            <div class="form-group  {{ $errors->has('user_id') ? 'has-error' : '' }}" >

                    <div class="row">

                      <div class="col-md-6 form-control-default">

                      {!! Form::label('user_id','User') !!}
                      {!! $errors->first('user_id', '<spam class="help-block">:message</spam>') !!}
                      <?php $user = App\User::get(); ?>
                      {!! Form::select('user_id',[''=>'Select a User', 'Users'=>$user->lists('first_name','email')],null,['class' => 'form-control ','id'=>'user']) !!}
                      </div>

                      <div class="col-md-6" style="padding-top: 24px;">
                          <a href="#" class="btn btn-primary " title="delete" data-toggle="modal" data-target="#myModal"> Not a registered user </a>
                                            
                      </div>

                    </div>
                
                </div> 

            <div class="row">

                <div class="col-md-3 form-group form-control-default {{ $errors->has('email') ? 'has-error' : '' }}" >

                    {!! Form::label('email','Email') !!}
                    {!! $errors->first('email', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('email',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-3 form-group form-control-default {{ $errors->has('mobile') ? 'has-error' : '' }}" >

                    {!! Form::label('mobile','Mobile') !!}
                    {!! $errors->first('mobile', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('mobile',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-3 form-group form-control-default {{ $errors->has('phone') ? 'has-error' : '' }}" >

                    {!! Form::label('phone','Phone') !!}
                    {!! $errors->first('phone', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('phone',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-3 form-group form-control-default {{ $errors->has('fax') ? 'has-error' : '' }}" >

                    {!! Form::label('fax','Fax') !!}
                    {!! $errors->first('fax', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('fax',null,['class' => 'form-control']) !!}
                
                </div>      
            
            
          </div>
          <div class="sidebar-block">
            <h4 class="category">Commercial</h4>
           <div class="form-group form-control-default {{ $errors->has('address') ? 'has-error' : '' }}" >

                    {!! Form::label('address','Address of the Project') !!}
                    {!! $errors->first('address', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::textarea('address',null,['class' => 'form-control']) !!}
                
                </div>

             <div class="row">

                <div class="col-md-4 form-group form-control-default {{ $errors->has('city') ? 'has-error' : '' }}" >

                    {!! Form::label('city','City') !!}
                    {!! $errors->first('city', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('city',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-4 form-group form-control-default {{ $errors->has('town') ? 'has-error' : '' }}" >

                    {!! Form::label('town','Town') !!}
                    {!! $errors->first('town', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('town',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-4 form-group form-control-default {{ $errors->has('pin') ? 'has-error' : '' }}" >

                    {!! Form::label('pin','Pin Number') !!}
                    {!! $errors->first('pin', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('pin',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

            <div class="form-group form-control-default required {{ $errors->has('latitude') ? 'has-error' : '' }}">
              <label for="location">Location</label>

              <label>latitude:<span id='lat' name='latitude'></span></label>
            {!! $errors->first('latitude', '<spam class="help-block">:message</spam>') !!}
              <label>longitude:<span id='lon' name = 'longitude'></span></label><br>
              {!! $errors->first('longitude', '<spam class="help-block">:message</spam>') !!}
              <input type="hidden" id="hlat" name="latitude" >
              <input type="hidden" id="hlon" name="longitude" >
             <!-- <button type="submit" class="btn btn-primary" id="latbtn">Submit</button>-->
            </div>

              <div class="row">

                <div class="col-md-4 form-group form-control-default {{ $errors->has('no_units') ? 'has-error' : '' }}" >

                    {!! Form::label('no_units','Number of Units') !!}
                    {!! $errors->first('no_units', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('no_units',null,['class' => 'form-control']) !!}
                
                </div>


                <div class="col-md-4 form-group form-control-default {{ $errors->has('type') ? 'has-error' : '' }}" >

                    {!! Form::label('type','Type of Project') !!}
                    {!! $errors->first('type', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('type',null,['class' => 'form-control','placeholder'=>'Villa, Flat, ....']) !!}
                
                </div>

                <div class="col-md-4 form-group form-control-default {{ $errors->has('status') ? 'has-error' : '' }}" >

                    {!! Form::label('status','Status of the Project') !!}
                    {!! $errors->first('status', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('status',null,['class' => 'form-control','placeholder'=>'under custruction']) !!}
                
                </div>


             </div>

             <div class="row">

                <div class="col-md-4 form-group form-control-default {{ $errors->has('possesion_start') ? 'has-error' : '' }}" >

                    {!! Form::label('possesion_start','Possesion Start From') !!}
                    {!! $errors->first('possesion_start', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('possesion_start',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group form-control-default {{ $errors->has('configuration') ? 'has-error' : '' }}" >

                    {!! Form::label('configuration','Units Configuration') !!}
                    {!! $errors->first('configuration', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('configuration',null,['class' => 'form-control','placeholder'=>'1 BHK, 2 BHK, ....']) !!}
                
                </div>

                <div class="col-md-4 form-group form-control-default {{ $errors->has('project_size') ? 'has-error' : '' }}" >

                    {!! Form::label('project_size','Project Size') !!}
                    {!! $errors->first('project_size', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('project_size',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

             <div class="row">

                <div class="col-md-4 form-group form-control-default {{ $errors->has('min_price') ? 'has-error' : '' }}" >

                    {!! Form::label('min_price','Minimum Price From') !!}
                    {!! $errors->first('min_price', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('min_price',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group form-control-default {{ $errors->has('max_price') ? 'has-error' : '' }}" >

                    {!! Form::label('max_price','Maximum Price from') !!}
                    {!! $errors->first('max_price', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('max_price',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-4 form-group form-control-default {{ $errors->has('emi_starts') ? 'has-error' : '' }}" >

                    {!! Form::label('emi_starts','EMI Starts from') !!}
                    {!! $errors->first('emi_starts', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('emi_starts',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

             <div class="row">

                <div class="col-md-4 form-group form-control-default {{ $errors->has('carpet_min') ? 'has-error' : '' }}" >

                    {!! Form::label('carpet_min','Minimum Carpet Area') !!}
                    {!! $errors->first('carpet_min', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('carpet_min',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group form-control-default {{ $errors->has('carpet_max') ? 'has-error' : '' }}" >

                    {!! Form::label('carpet_max','Maximum Carpet Area') !!}
                    {!! $errors->first('carpet_max', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('carpet_max',null,['class' => 'form-control']) !!}
                
                </div>

                <div class="col-md-4 form-group form-control-default {{ $errors->has('land_size') ? 'has-error' : '' }}" >

                    {!! Form::label('land_size','Land total size') !!}
                    {!! $errors->first('land_size', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('land_size',null,['class' => 'form-control']) !!}
                
                </div>


            </div>

            <div class="row">

                <div class="col-md-4 form-group form-control-default {{ $errors->has('no_floor') ? 'has-error' : '' }}" >

                    {!! Form::label('no_floor','Number of Floors') !!}
                    {!! $errors->first('no_floor', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('no_floor',null,['class' => 'form-control','id'=>'date']) !!}
                
                </div>


                <div class="col-md-4 form-group form-control-default {{ $errors->has('legal_approve') ? 'has-error' : '' }}" >

                    {!! Form::label('legal_approve','Lagal approval') !!}
                    {!! $errors->first('legal_approve', '<spam class="help-block">:message</spam>') !!}
                    <div class="row form-control">
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

                <div class="col-md-4 form-group form-control-default {{ $errors->has('bank_approve') ? 'has-error' : '' }}" >

                    {!! Form::label('bank_approve','Bank Approval') !!}
                    {!! $errors->first('bank_approve', '<spam class="help-block">:message</spam>') !!}
                    <div class="row form-control">
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

            <div class="form-group form-control-default {{ $errors->has('facilities') ? 'has-error' : '' }}">
              <label for="facilities" class="sidebar-text" name='facilities'>Facilities</label>
               {!! $errors->first('facilities', '<spam class="help-block">:message</spam>') !!}
              <?php $facility = App\Model\Aminities::get();  ?>
              {!! Form::select('facilities[]',[''=>'Select Facilities','Facilities'=>$facility->lists('name','id')],null,['class'=>'selectpicker','multiple'=>true]) !!}
            </div>
<!--<div class="avatar-view" title="Change the avatar">
      <img src="img/picture.jpg" alt="Avatar">
    </div>-->



          </div>
          <div class="sidebar-block equal-padding">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        {!! Form::close() !!}
         @include('themes.default1.property.userForm')
      </div>
    </aside>
    
    
@include('themes.default1.property.croppingmodel')

<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-top-none" id="content">



             <div id="gmap" style="position:absolute; width:100%; height:100%;"></div>




        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->


@stop

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script>
$(document).ready(function() {
function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="img-thumbnail" style="height: 100px;" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
});
</script>

