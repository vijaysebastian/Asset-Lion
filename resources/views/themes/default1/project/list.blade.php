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
  <link href="{{asset('css/vendor/all.css')}}" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/bootstrap-slider.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery-jvectormap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/morris.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/ui.fancytree.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->

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
  <link href="{{asset('css/app/app.css')}}" rel="stylesheet">
  
  <link rel="stylesheet" href="{{('dist/cropper.min.css')}}">
  <link rel="stylesheet" href="{{('css/main.css')}}">
<script type="text/javascript" src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/player.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/timeline.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/cover.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/chat.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-calendar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-progress-bars.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/ui.css" rel="stylesheet" /> -->

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

          <a class="navbar-brand" href="{{url('/')}}">Asset Lion</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
          
          <ul class="nav navbar-nav navbar-right">

          @if(!Auth::user())
            <!-- Login -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-fw fa-lock"></i> Login
              </a>
              <div class="dropdown-menu dropdown-size-280">
                {!! Form::open(['url'=>'auth/login' , 'method'=>'post']) !!}
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="checkbox" name="remember"> Remember Me
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Login <i class="fa fa-sign-in"></i></button>
                  </div>
                {!! Form::close() !!}
                 <div class="text-center">
                    <a href="{{url('password/email')}}">Forgot Password !</a>
                  </div>
                
              </div>
            </li>
            <!-- // END login -->
            <!-- Sign up -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-fw fa-plus"></i> Sign Up
              </a>
              <div class="dropdown-menu dropdown-size-280">
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
            </li>

            @endif
            <!-- // END sign up -->

            <!-- user -->
            @if(Auth::user())
            <li class="dropdown user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(Auth::user()->profile_pic)
                 <img src="{{ asset('images/user/'.Auth::user()->profile_pic) }}" alt="User" class="img-circle" > 
              @else
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="User" class="img-circle" > 
              @endif
                {{Auth::user()->first_name}}<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('profile')}}"><i class="fa fa-user"></i>Profile</a></li>
                <li><a href="{{url('auth/logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
            @endif
            <!-- // END user -->
          </ul> 
        </div>
        <!-- /.navbar-collapse -->

      </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <aside class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-skin-dark sidebar-visible-desktop" id=sidebar-menu data-type=collapse>
      <div data-scrollable>

      @if(Auth::user())

      @if(Auth::user()->authority=='admin')
     
        <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
          <li class="hasSubmenu">
            <a href="#property"><i class="fa fa-home"></i><span>Property</span></a>
            <ul id="property">
              <li><a href="{{url('property/create')}}"><i class="fa fa-map-marker"></i><span>Add Property</span></a></li>
              <li><a href="{{url('property')}}"><i class="fa fa-list"></i><span>Property List</span></a></li>
            </ul>
          </li>
        </ul>
         <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
          <li class="hasSubmenu">
            <a href="#project"><i class="fa fa-home"></i><span>Project</span></a>
            <ul id="project">
              <li><a href="{{url('projects/create')}}"><i class="fa fa-map-marker"></i><span>Add Project</span></a></li>
              <li><a href="{{url('projects')}}"><i class="fa fa-list"></i><span>Project List</span></a></li>
          </li>
        </ul>

        <li><a href="{{url('users')}}"><i class="fa fa-users"></i><span>Users</span></a></li>

        <li><a href="{{url('sliders')}}"><i class="fa fa-users"></i><span>Sliders</span></a></li>

        @elseif(Auth::user()->authority=='user')
      

      
        <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
          
              <li><a href="{{url('my-properties')}}"><i class="fa fa-map-marker"></i><span>My Properties</span></a></li>
             
        </ul>

        @elseif(Auth::user()->authority=='builder')
      

      
        <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
          
              <li><a href="{{url('my-properties')}}"><i class="fa fa-map-marker"></i><span>My Projects</span></a></li>
             
        </ul>

        @endif
         <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
          
              <li><a href="{{url('my-messages')}}"><i class="fa fa-map-marker"></i><span>My Messages</span></a></li>
             
        </ul>
        @endif
         
     
      </div>
    </aside>

     <!-- content push wrapper -->
    <div class="st-pusher">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-top-none">
          
                  @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissable" style="padding-left: 177px;">
                        
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('success')}}
                    </div>
                  @endif

                   @if (count($errors) > 0)
                        <div class="alert alert-danger" style="padding-left: 177px;" id="error">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                    @endif


@yield('content')

</div>
</div>
</div>
    
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
  <script src="{{asset('js/vendor/all.js')}}"></script>

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="js/vendor/core/all.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.js"></script> -->
  <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
  <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
  <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
  <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/handlebars.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/load_image.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
  <!-- <script src="js/vendor/tables/all.js"></script> -->
  <!-- <script src="js/vendor/forms/all.js"></script> -->
  <!-- <script src="js/vendor/media/all.js"></script> -->
  <!-- <script src="js/vendor/player/all.js"></script> -->
  <!-- <script src="js/vendor/charts/all.js"></script> -->
  <!-- <script src="js/vendor/charts/flot/all.js"></script> -->
  <!-- <script src="js/vendor/charts/easy-pie/jquery.easypiechart.js"></script> -->
  <!-- <script src="js/vendor/charts/morris/all.js"></script> -->
  <!-- <script src="js/vendor/charts/sparkline/all.js"></script> -->
  <!-- <script src="js/vendor/maps/vector/all.js"></script> -->
  <!-- <script src="js/vendor/tree/jquery.fancytree-all.js"></script> -->
  <!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
  <!-- <script src="js/vendor/angular/all.js"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
  <script src="{{asset('js/app/app.js')}}"></script>

   <script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6v5-2uaq_wusHDktM9ILcqIrlPtnZgEk&sensor=false">
</script>
<script type="text/javascript">

    function initialize() {
        var myLatlng = new google.maps.LatLng(24.18061975930,79.36565089010);
        var myOptions = {
            zoom:7,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("gmap"), myOptions);
        // marker refers to a global variable
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        // if center changed then update lat and lon document objects
        google.maps.event.addListener(map, 'center_changed', function () {
            var location = map.getCenter();
            document.getElementById("lat").innerHTML = location.lat();

            document.getElementById("lon").innerHTML = location.lng();

            document.getElementById("hlat").value = location.lat();

            document.getElementById("hlon").value = location.lng();
            // call function to reposition marker location
            placeMarker(location);
        });
        // if zoom changed, then update document object with new info
        google.maps.event.addListener(map, 'zoom_changed', function () {
            zoomLevel = map.getZoom();
            document.getElementById("zoom_level").innerHTML = zoomLevel;
        });
        // double click on the marker changes zoom level
        google.maps.event.addListener(marker, 'dblclick', function () {
            zoomLevel = map.getZoom() + 1;
            if (zoomLevel == 20) {
                zoomLevel = 10;
            }
            document.getElementById("zoom_level").innerHTML = zoomLevel;
            map.setZoom(zoomLevel);
        });

        function placeMarker(location) {
            var clickedLocation = new google.maps.LatLng(location);
            marker.setPosition(location);
        }
    }
    window.onload = function () { initialize() };
</script>



  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  <!-- <script src="js/app/essentials.js"></script> -->
  <!-- <script src="js/app/layout.js"></script> -->
  <!-- <script src="js/app/sidebar.js"></script> -->
  <!-- <script src="js/app/media.js"></script> -->
  <!-- <script src="js/app/player.js"></script> -->
  <!-- <script src="js/app/timeline.js"></script> -->
  <!-- <script src="js/app/chat.js"></script> -->
  <!-- <script src="js/app/maps.js"></script> -->
  <!-- <script src="js/app/charts/all.js"></script> -->
  <!-- <script src="js/app/charts/flot.js"></script> -->
  <!-- <script src="js/app/charts/easy-pie.js"></script> -->
  <!-- <script src="js/app/charts/morris.js"></script> -->
  <!-- <script src="js/app/charts/sparkline.js"></script> -->

  <!-- App Scripts CORE [real-estate]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
  <!-- <script src="js/app/main.js"></script> -->

</body>

</html>