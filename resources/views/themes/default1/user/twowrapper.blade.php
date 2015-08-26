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
        <form action="#">
          <div class="sidebar-block">
            <h1 class="text-h3 sidebar-heading">Create listingmdnvj</h1>
          </div>
          <div class="sidebar-block">
            <h4 class="category">General information</h4>
            <div class="form-group form-control-default required">
              <label for="title">Title</label>
              <input type="text" placeholder="Listing Title" class="form-control" id="title" />
            </div>
            <div class="form-group form-control-default required">
              <label for="description">Description</label>
              <textarea id="description" class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, inventore, alias, architecto, accusamus magni odit quasi fugiat dolore eaque deserunt quibusdam ad similique saepe fugit consectetur repellendus sapiente veritatis culpa.</textarea>
            </div>
            <div class="form-group">
              <p class="help-block">
                <i class="icon-note-pad fa fa-fw"></i> 2 Characters Left
              </p>
            </div>
          </div>
          <div class="sidebar-block">
            <h4 class="category">Commercial</h4>
            <div class="form-group">
              <label for="action" class="sidebar-text">I would like to:</label>
              <select id="action" class="selectpicker">
                <option value="1">Rent</option>
                <option value="2" selected>Sell</option>
              </select>
            </div>
            <div class="form-group form-control-default required">
              <label for="price">Price (&euro;)</label>
              <input id="price" type="text" class="form-control" value="90,000" />
            </div>
          </div>
          <div class="sidebar-block">
            <h4 class="category">Property</h4>
            <div class="form-group">
              <label for="type" class="sidebar-text">Type</label>
              <select id="type" class="selectpicker">
                <option>Apartment</option>
                <option>House</option>
              </select>
            </div>
            <div class="form-group">
              <label for="facilities" class="sidebar-text">Facilities</label>
              <select id="facilities" class="selectpicker" multiple>
                <option>Garden</option>
                <option selected>Internet</option>
                <option>Gas station</option>
                <option selected>Mall</option>
                <option selected>Washing machine</option>
              </select>
            </div>
            <div class="form-group form-control-default required">
              <label for="slug">slug</label>
              <input type="text"  class="form-control" id="slug" />
            </div>

            <div class="form-group form-control-default required">
              <label for="project_id">Project Id</label>
              <input type="text"  class="form-control" id="project_id" placeholder="Id"/>
            </div>

            <div class="form-group form-control-default required">
              <label for="location">Location</label>
              <label>latitude:<span id='lat'></span></label>
              <label>longitude:<span id='lon'></span></label>
            </div>

              <div class="form-group form-control-default">
              <label for="gallery">Gallery</label>
              <input type="file"  class="form-control" id="gallery" multiple/>
            </div>

             <div class="form-group form-control-default required">
              <label for="master_plan">Master plan</label>
              <input type="file"  class="form-control" id="master_plan"/>
            </div>

            <div class="form-group form-control-default required">
              <label for="availability_date">Availability Date</label>
              <input type="date"  class="form-control" id="availability_date"/>
            </div>

            <div class="form-group form-control-default required">
              <label for="year_of_construction">Year of Construction</label>
              <input type="date"  class="form-control" id="year_of_construction"/>
            </div>

           <div class="form-group form-control-default ">
              <label for="owner_type" class="sidebar-text">Owner Type</label>
              <select id="owner_type" class="selectpicker">
                <option value="1" selected>Single</option>
                <option value="2" >Two</option>
                <option value="3" >Multiple</option>
              </select>
              <div class="form-group">
              <label for="no_owner">If more than two owner please specify </label>
              <input type="text"  class="form-control" id="no_owner"/>
            </div>
            </div>

             <div class="form-group form-control-default ">
              <label for="configuration" class="sidebar-text">Configuration</label>
              <select id="configuration" class="selectpicker">
                <option value="1" selected>1BHK</option>
                <option value="2" >2BHK</option>
                <option value="3" >3BHK</option>
                <option value="4" >4BHK</option>
                <option value="5" >Multiple</option>
              </select>
              <div class="form-group">
              <label for="bhk">If more please specify </label>
              <input type="text"  class="form-control" id="bhk"/>
            </div>
            </div>

            <div class="form-group form-control-default required">
              <label for="year_of_construction">Year of Construction</label>
              <input type="date"  class="form-control" id="year_of_construction"/>
            </div>
            
            
             <div class="form-group form-control-default ">
              <label for="parking" class="sidebar-text">Parking</label>
          <label><input type="radio" name="yes">&nbsp;&nbsp;Yes</label>
          <label><input type="radio" name="no">&nbsp;&nbsp;No</label>
          </div>

          </div>
          <div class="sidebar-block equal-padding">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
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
            <div class="panel-body panel-body-padding">
              <h4 class="panel-title" id="panel-title-left">Create listing</h4>
            </div>
           <hr>
                 <form action="#">
          
          <div class="sidebar-block panel-body-padding">
            <h4 class="panel-heading-left">General information</h4>
            <div class="form-group form-control-default required">
              <label for="title">Title</label>
              <input type="text" placeholder="Listing Title" class="form-control" id="title" />
            </div>
            <div class="form-group form-control-default required">
              <label for="description">Description</label>
              <textarea id="description" class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, inventore, alias, architecto, accusamus magni odit quasi fugiat dolore eaque deserunt quibusdam ad similique saepe fugit consectetur repellendus sapiente veritatis culpa.</textarea>
            </div>
            <div class="form-group">
              <p class="help-block">
                <i class="icon-note-pad fa fa-fw"></i> 2 Characters Left
              </p>
            </div>
          </div>
          <hr>
          <div class="sidebar-block panel-body-padding">
            <h4 class="panel-heading-left">Commercial</h4>
            <div class="form-group">
              <label for="action" class="sidebar-text">I would like to:</label>
              <select id="action" class="selectpicker">
                <option value="1">Rent</option>
                <option value="2" selected>Sell</option>
              </select>
            </div>
            <div class="form-group form-control-default required">
              <label for="price">Price (&euro;)</label>
              <input id="price" type="text" class="form-control" value="90,000" />
            </div>
          </div>
          <hr>
          <div class="sidebar-block panel-body-padding">
            <h4 class="panel-heading-left">Property</h4>
            <div class="form-group">
              <label for="type" class="sidebar-text">Type</label>
              <select id="type" class="selectpicker">
                <option>Apartment</option>
                <option>House</option>
              </select>
            </div>
            <div class="form-group">
              <label for="facilities" class="sidebar-text">Facilities</label>
              <select id="facilities" class="selectpicker" multiple>
                <option>Garden</option>
                <option selected>Internet</option>
                <option>Gas station</option>
                <option selected>Mall</option>
                <option selected>Washing machine</option>
              </select>
            </div>
            <div class="form-group form-control-default required">
              <label for="slug">slug</label>
              <input type="text"  class="form-control" id="slug" />
            </div>

            <div class="form-group form-control-default required">
              <label for="project_id">Project Id</label>
              <input type="text"  class="form-control" id="project_id" placeholder="Id"/>
            </div>

            <div class="form-group form-control-default required">
              <label for="location">Location</label>
              <label>latitude:<span id='lat'></span></label>
              <label>longitude:<span id='lon'></span></label>
            </div>

              <div class="form-group form-control-default">
              <label for="gallery">Gallery</label>
              <input type="file"  class="form-control" id="gallery" multiple/>
            </div>

             <div class="form-group form-control-default required">
              <label for="master_plan">Master plan</label>
              <input type="file"  class="form-control" id="master_plan"/>
            </div>

            <div class="form-group form-control-default required">
              <label for="availability_date">Availability Date</label>
              <input type="date"  class="form-control" id="availability_date"/>
            </div>

            <div class="form-group form-control-default required">
              <label for="year_of_construction">Year of Construction</label>
              <input type="date"  class="form-control" id="year_of_construction"/>
            </div>

           <div class="form-group form-control-default ">
              <label for="owner_type" class="sidebar-text">Owner Type</label>
              <select id="owner_type" class="selectpicker">
                <option value="1" selected>Single</option>
                <option value="2" >Two</option>
                <option value="3" >Multiple</option>
              </select>
              <div class="form-group">
              <label for="no_owner">If more than two owner please specify </label>
              <input type="text"  class="form-control" id="no_owner"/>
            </div>
            </div>

             <div class="form-group form-control-default ">
              <label for="configuration" class="sidebar-text">Configuration</label>
              <select id="configuration" class="selectpicker">
                <option value="1" selected>1BHK</option>
                <option value="2" >2BHK</option>
                <option value="3" >3BHK</option>
                <option value="4" >4BHK</option>
                <option value="5" >Multiple</option>
              </select>
              <div class="form-group">
              <label for="bhk">If more please specify </label>
              <input type="text"  class="form-control" id="bhk"/>
            </div>
            </div>

            <div class="form-group form-control-default required">
              <label for="year_of_construction">Year of Construction</label>
              <input type="date"  class="form-control" id="year_of_construction"/>
            </div>
            
            
             <div class=" form-control-default ">
              <label for="parking" class="sidebar-text">Parking</label>
          <label><input type="radio" name="yes">&nbsp;&nbsp;Yes</label>
          <label><input type="radio" name="no">&nbsp;&nbsp;No</label>
          </div>

          </div>
          <hr>
           <div class="panel-title">
         
          <div class="panel-body-padding">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </div>
        </form>
              
            </ul>
          </div>


        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

@stop