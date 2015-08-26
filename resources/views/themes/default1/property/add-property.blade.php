<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l1 sidebar-r1-xs sidebar-r-48pc-lg sidebar-r-40pc" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Asset Lion</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="{{asset('dist/css/vendor/all.css')}}" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <link href="{{asset('boostrap/css/bootstrap.css')}}" rel="stylesheet">
  

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "real-estate" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "real-estate" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "real-estate" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/real-estate/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="{{asset('dist/css/app/app.css')}}" rel="stylesheet">

  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>

  <script type="text/javascript">
     var sampleApp = angular.module('sampleApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
     </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

  <!-- Wrapper required for sidebar transitions -->
  <div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#sidebar-edit" data-toggle="sidebar-menu" class="toggle pull-right visible-xs"><i class="fa fa-pencil"></i></a>

          <a class="navbar-brand" href="index.html">ThemeKit</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
          
          <ul class="nav navbar-nav navbar-right">
            <!-- Login -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-fw fa-lock"></i> Login
              </a>
              <div class="dropdown-menu dropdown-size-280">
                <form>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Login <i class="fa fa-sign-in"></i></button>
                  </div>
                </form>
              </div>
            </li>
            <!-- // END login -->
            <!-- Sign up -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-fw fa-plus"></i> Sign Up
              </a>
              <div class="dropdown-menu dropdown-size-280">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-control-default">
                        <label for="exampleInputFirstName">First name</label>
                        <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-control-default">
                        <label for="exampleInputLastName">Last name</label>
                        <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-control-default required">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group form-control-default required">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </li>
            <!-- // END sign up -->
            <!-- user -->
            <li class="dropdown user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('dist/images/people/110/guy-6.jpg')}}" alt="" class="img-circle" /> Bill<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
            <!-- // END user -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->

      </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <aside class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-skin-dark sidebar-visible-desktop" id=sidebar-menu data-type=collapse>
      <div data-scrollable>
        <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
          <li class="hasSubmenu">
            <a href="#property"><i class="fa fa-home"></i><span>Property</span></a>
            <ul id="property">
              <li><a href="{{url('property/create')}}"><i class="fa fa-map-marker"></i><span>Add Property</span></a></li>
              <li><a href="listing_list.html"><i class="fa fa-list"></i><span>Property Listing</span></a></li>
            </ul>
          </li>
          </ul>
      </div>
    </aside>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <aside class="sidebar right sidebar-size-xs-1 sidebar-size-lg-48pc sid  ebar-size-40pc sidebar-offset-0 sidebar-skin-white sidebar-visible-desktop" id=sidebar-edit data-toggle-layout=true data-toggle-bar=true>
      <div data-scrollable>
        {!! Form::open(['url'=>'property', 'method'=>'post']) !!}
          <div class="sidebar-block">
            <h1 class="text-h3 sidebar-heading">Create listing</h1>
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
              <select id="action" class="selectpicker" name="rent_sell">
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
              <select id="type" class="selectpicker" name="type">
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
          </div>
          <div class="sidebar-block equal-padding">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default"><i class="fa fa-times fa-fw"></i> Cancel</button>
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
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-top-none" id="content">

          <div id="google-fs-realestate" data-toggle="google-maps" data-zoom="18" data-file="{{asset('dist/js/data/google_maps/markers-edit.json')}}" data-id="map-edit" data-center="57.797091972194565,12.051336765289307" data-zoom-position="LEFT_BOTTOM" class="maps-google-fs"></div>

          <div class="navbar navbar-default navbar-size-large navbar-static-top navbar-map-overlay">
            <div class="navbar-text"><i class="fa fa-fw fa-info"></i> Click on the map to add markers</div>
            <a data-toggle="sidebar-menu" href="#sidebar-edit" id="toggle-sidebar-edit" class="toggle pull-right active hidden-xs margin-none"><i class="fa fa-edit"></i></a>
          </div>

          <script id="real-estate-map-pop-1" type="text/x-handlebars-template">
            <div class="padding-none full">
              <div class="ribbon-heading text-h5 <% ribbon_mark_class %> absolute leftinline margin-none"><% ribbon_mark_text %></div>
              <div class="cover overlay cover-image-full margin-none">
                <a href="<% details_url %>" class="thumb" data-height="150px">
                  <img src="<% image %>" alt="image" class="img-responsive">
                </a>
              </div>
              <div class="list-group margin-none">
                <div class="list-group-item">
                  <a href="<% details_url %>" class="btn btn-primary btn-circle pull-right">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                  <h4 class="margin-v-0-5"><% title %></h4>
                  <p class="small">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                  <p><% description %></p>
                  <label class="label label-grey-100">&euro;<% price %></label>&nbsp;
                  <small>

                    <i class="fa fa-fw icon-home-fill-1"></i> Agency

                  </small>
                </div>
              </div>
            </div>
          </script>

          <script id="real-estate-map-pop_home" type="text/x-handlebars-template">
            <div class="padding-none">
              <div class="ribbon-heading text-h5 <% ribbon_mark_class %> absolute left inline margin-none">
                <% ribbon_mark_text %>
              </div>
              <div class="cover cover-image-full margin-none">
                <a href="<% details_url %>" class="thumb" data-height="150px">
                  <img src="<% image %>" alt="image" class="img-responsive">
                </a>
              </div>
              <div class="text-center">
                <h4 class="text-primary margin-bottom-none"><% title %></h4>
                <p class="h5 text-muted margin-v-5-15"><% location %></p>
              </div>
            </div>
          </script>

          <script id="real-estate-map-pop_profile" type="text/x-handlebars-template">
            <div class="text-center">
              <p>
                <img src="<% image %>" alt="" class="img-circle" />
              </p>
              <h4><a href="<% details_url %>" class="text-grey-700"><% name %></a></h4>
              <a href="mailto:<% email %>"><% email %></a>
              <br/>
              <p class="text-muted"><i class="fa fa-user fa-fw"></i>Agent <i class="fa fa-home fa-fw"></i><% no_properties %> Properties</p>
            </div>
          </script>

          <script id="real-estate-map-pop_icon" type="text/x-handlebars-template">
            <div>
              <div class="text-center">
                <div class="h1 text-grey-300">
                  <i class="<% inner_icon %>"></i>
                </div>
                <p><a href="<% details_url %>" class="h4 text-primary"><% name %></a></p>
                <p><% location %></p>
              </div>
            </div>
          </script>

          <script id="map-infobox-profile" type="text/x-handlebars-template">
            <div class="text-center">
              <p>
                <img src="<% image %>" alt="" class="img-circle" />
              </p>
              <h4><a href="<% details_url %>" class="text-grey-700"><% name %></a></h4>
              <a href="mailto:<% email %>"><% email %></a>
              <br/>
              <p class="text-muted"><i class="fa fa-user fa-fw"></i>Agent <i class="fa fa-home fa-fw"></i><% no_properties %> Properties</p>
            </div>
          </script>

          <script id="map-infobox-icon" type="text/x-handlebars-template">
            <div>
              <div class="text-center">
                <div class="h1 text-grey-300">
                  <i class="<% inner_icon %>"></i>
                </div>
                <p><a href="#" class="h4 text-primary"><% name %></a></p>
                <p><% description %></p>
              </div>
            </div>
          </script>

          <script id="map-infobox-simple" type="text/x-handlebars-template">
            <div>
              <div class="text-center"> 
                <h1><% title %></h1>
                <p><% description %></p>
              </div>
            </div>
          </script>

          <script id="tpl-edit" type="text/x-handlebars-template">
            <div>
              <div class="form-group">
                <label for="state">State:</label>
                <input id="state" disabled class="form-control" type="text" value="<% state %>" />
              </div>
              <div class="form-group">
                <label for="country">Country:</label>
                <input id="country" disabled class="form-control" type="text" value="<% country %>" />
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input id="address" disabled class="form-control" type="text" value="<% address %>" />
              </div>
              <div class="form-group">
                <button type="button" id="map-delete-marker" data-id="<% id %>" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
              </div>
            </div>
          </script>

          <script id="map-pagination" type="text/x-handlebars-template">
            <div id="pagination" class="btn-group btn-group-lg">
              <a href="#" class="col-xs-2 back-btn btn btn-inverse">&lsaquo;</a>
              <a class="col-xs-8 display btn btn-inverse"></a>
              <a href="#" class="col-xs-2 fwd-btn btn btn-inverse">&rsaquo;</a>
            </div>
          </script>

          <script id="map-filters-template" type="text/x-handlebars-template">
            <div id="radios" class="map-overlay-sidebar overflow-hidden absolute top bottom left">
              <div data-scrollable>
                <h4>Filters</h4>
                
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" checked id="map-filter-<% @index %>" value="<% this %>" />
                    <label for="map-filter-<% @index %>"><% this %></label>
                  </div>
               
                <hr/>
                <p>Enable marker filters by adding the HTML5 attribute <code>data-filters="true"</code>. Customize the Handlebars template directly from HTML and specify the template id with <code>data-filters-template="#map-filters-template"</code>. Check
                  the source of this page to see the Handlebars template.</p>
              </div>
            </div>
          </script>

          <script id="map-style-switch" type="text/x-handlebars-template">
            <div data-scrollable>
              <h4>Map Themes</h4>
              <label for="map-style-switch-select">Select Theme:</label>
              <select id="map-style-switch-select" class="selectpicker">
                <%#each styles%>
                  <option value="<% @key %>"><% @key %></option>
                <%/each%>
              </select>
              <hr/>
              <p>Easily switch the map theme by simply adding the HTML5 attribute <code>data-style="theme-name"</code> directly on the map container.</p>
            </div>
          </script>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

    <!-- Footer -->
     <footer class="footer">
     <a href="{{url('/')}}"> <strong>Asset Lion</strong></a> &copy; Copyright <?php echo date('Y') ?>. Powered By <a href="http://ladybirdweb.com"><strong>Ladybird Web Solution</strong> <img src="{{asset('img/ladybird.png')}}"></a>
    </footer>
    <!-- // Footer -->

  </div>
  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "real-estate",
      skins: {
        "default": {
          "primary-color": "#3498db"
        }
      }
    };
  </script>

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
   <script src="{{asset('dist/js/app/all.js')}}"></script>

  <!-- Vendor Scripts Standalone Libraries -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
  <script src="{{asset('dist/js/app/app.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>

  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  
  <!-- App Scripts CORE [real-estate]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
  {{-- <script src="{{asset('dist/js/app/main.js')}}"></script> --}}

</body>

</html>