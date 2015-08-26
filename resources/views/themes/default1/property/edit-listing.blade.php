@extends('themes.default1.project.list')
@section('content')



    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <aside class="sidebar right sidebar-size-xs-1 sidebar-size-lg-48pc sidebar-size-40pc sidebar-offset-0 sidebar-skin-white sidebar-visible-desktop" id=sidebar-edit data-toggle-layout=true data-toggle-bar=true>
      <div data-scrollable>
        {!! Form::model($property,['url'=>'property/'.$property->slug , 'method' => 'PATCH','enctype'=>'multipart/form-data', 'files'=>true]) !!}
          <div class="sidebar-block">
            <h1 class="text-h3 sidebar-heading">Create listing</h1>
          </div>
          <div class="sidebar-block">
            <h4 class="category">General information</h4>
            
             <div class="form-group form-control-default {{ $errors->has('slug') ? 'has-error' : '' }}">
              <label for="slug">slug</label>
               {!! $errors->first('slug', '<spam class="help-block">:message</spam>') !!}
              <input type="text"  class="form-control" id="slug" name="slug" value="{{$property->slug}}" />
            </div>

            <div class="form-group form-control-default {{ $errors->has('description') ? 'has-error' : '' }}">
              <label for="description">Description</label>
               {!! $errors->first('description', '<spam class="help-block">:message</spam>') !!}
              <textarea name="description" class="form-control" value="{{$property->description}}"></textarea>
            </div>

            <div class="form-group form-control-default {{ $errors->has('address') ? 'has-error' : '' }}">
              <label for="address">Address</label>
               {!! $errors->first('address', '<spam class="help-block">:message</spam>') !!}
              <textarea name="address" class="form-control" value="{{$property->address}}"></textarea>
            </div>

            <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}" >

                    <div class="row">

                    <div class="col-md-6">

                    {!! Form::label('user_id','User') !!}
                    {!! $errors->first('user_id', '<spam class="help-block">:message</spam>') !!}
                    <?php $user = App\User::get(); ?>
                    {!! Form::select('user_id',[''=>'Select a User', 'Users'=>$user->lists('first_name','email')],null,['class' => 'form-control','id'=>'user']) !!}
                    </div>

                    <div class="col-md-6" style="padding-top: 24px;">
                        <a href="#" class="btn btn-primary" title="delete" data-toggle="modal" data-target="#myModal"> Not a registered user </a>
                                          
                    </div>

                    </div>
                
                </div>       
            
            
          </div>
          <div class="sidebar-block">
            <h4 class="category">Commercial</h4>
            <div class="form-group {{ $errors->has('sell_rent') ? 'has-error' : '' }}">
              <label for="action" class="sidebar-text">I would like to:</label>
               {!! $errors->first('sell_rent', '<spam class="help-block">:message</spam>') !!}
              <select id="action" class="selectpicker" name="sell_rent" id="sell_rent" value="{{$property->sell_rent}}">
                <option value="rent">Rent</option>
                <option value="sell" selected>Sell</option>
              </select>
            </div>
            <div class="form-group form-control-default required {{ $errors->has('price') ? 'has-error' : '' }}">
              <label for="price">Price (&#x20b9;)</label>
               {!! $errors->first('price', '<spam class="help-block">:message</spam>') !!}
              <input id="price" type="text" class="form-control" name="price" id="price" value="{{$property->price}}" />
            </div>
          </div>
          <div class="sidebar-block">
            <h4 class="category">Property</h4>
            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
              <label for="type" class="sidebar-text">Type</label>
               {!! $errors->first('type', '<spam class="help-block">:message</spam>') !!}
              <select id="type" class="selectpicker" name="type" value="{{$property->type}}">
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
              </select>
            </div>
            <div class="form-group {{ $errors->has('facilities') ? 'has-error' : '' }}">
              <label for="facilities" class="sidebar-text" name='facilities'>Facilities</label>
               {!! $errors->first('facilities', '<spam class="help-block">:message</spam>') !!}
              <?php $facility = App\Model\Aminities::get();  ?>
              {!! Form::select('facilities[]',[''=>'Select Facilities','Facilities'=>$facility->lists('name','id')],null,['class'=>'selectpicker','multiple'=>true]) !!}
            </div>
           

            
             <div class="form-group form-control-default required {{ $errors->has('project_id') ? 'has-error' : '' }}">
              <label for="project_id">Project Id</label>
               {!! $errors->first('project_id', '<spam class="help-block">:message</spam>') !!}
              {!! Form::select('project_id',[''=>'Select a project','Projects'=>$project->lists('title','id')],null,['class'=>'form-control','id'=>'project_id']) !!}
            </div>

            <div class="form-group form-control-default required {{ $errors->has('latitude') ? 'has-error' : '' }}">
              <label for="location">Location</label>

              <label>latitude:<span id='lat' name='latitude' value="{{$property->latitude}}"></span></label>
            {!! $errors->first('latitude', '<spam class="help-block">:message</spam>') !!}
              <label>longitude:<span id='lon' name = 'longitude' value="{{$property->longitude}}"></span></label><br>
              {!! $errors->first('longitude', '<spam class="help-block">:message</spam>') !!}
              <input type="hidden" id="hlat" name="latitude" >
              <input type="hidden" id="hlon" name="longitude" >
             <!-- <button type="submit" class="btn btn-primary" id="latbtn">Submit</button>-->
            </div>

              <div class="form-group form-control-default {{ $errors->has('gallery') ? 'has-error' : '' }}">
              <label for="gallery">Gallery</label>
               {!! $errors->first('gallery', '<spam class="help-block">:message</spam>') !!}
               <input type="file" id="files" name="gallery[]" class="form-control" multiple />
              <output id="list"></output>
              
              
            </div>

             <div class="form-group form-control-default required {{ $errors->has('master_plan') ? 'has-error' : '' }}">
              <label for="master_plan">Master plan</label>
               {!! $errors->first('master_plan', '<spam class="help-block">:message</spam>') !!}
              <input type="file"  class="form-control" id="master_plan" name="master_plan" />
            </div>

            <div class="form-group form-control-default required {{ $errors->has('availability_date') ? 'has-error' : '' }}">
              <label for="availability_date">Availability Date</label>
               {!! $errors->first('availability_date', '<spam class="help-block">:message</spam>') !!}
              <input type="date"  class="form-control" id="availability_date" name="availability_date" value="{{$property->availability_date}}" />
            </div>

            <div class="form-group form-control-default required {{ $errors->has('year_of_construction') ? 'has-error' : '' }}">
              <label for="year_of_construction">Year of Construction</label>
               {!! $errors->first('year_of_construction', '<spam class="help-block">:message</spam>') !!}
              <input type="date"  class="form-control" id="year_of_construction" name="year_of_construction" value="{{$property->year_of_construction}}" />
            </div>

           <div class="form-group form-control-default {{ $errors->has('owner_type') ? 'has-error' : '' }}">
              <label for="owner_type" class="sidebar-text">Owner Type</label>
               {!! $errors->first('owner_type', '<spam class="help-block">:message</spam>') !!}
              <select id="ownership_type" class="selectpicker" name="owner_type" value="{{$property->ownership_type}}">
                <option value="1" selected>Single</option>
                <option value="2" >Two</option>
                <option value="3" >Multiple</option>
              </select>
            </div>

             <div class="form-group form-control-default {{ $errors->has('configuration') ? 'has-error' : '' }}">
              <label for="configuration" class="sidebar-text">Configuration</label>
               {!! $errors->first('configuration', '<spam class="help-block">:message</spam>') !!}
              <select id="configuration" class="selectpicker" name="configuration" value="{{$property->configuration}}">
                <option value="1BHK" selected>1BHK</option>
                <option value="2BHK" >2BHK</option>
                <option value="3BHK" >3BHK</option>
                <option value="4BHK" >4BHK</option>
                <option value="more" >more</option>
              </select>
            </div>
            
            
             <div class="form-group form-control-default {{ $errors->has('parking') ? 'has-error' : '' }}">
              <label for="parking" class="sidebar-text">Parking</label>
               {!! $errors->first('parking', '<spam class="help-block">:message</spam>') !!}
          <label><input type="radio" name="parking" id="parking" value="yes">&nbsp;&nbsp;Yes</label>
          <label><input type="radio" name="parking" id = "parking" value="no">&nbsp;&nbsp;No</label>
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

