@extends('themes.default1.project.list')
@section('content')
<div data-scrollable>
<section class="content" style="padding-left: 70px;">
<div class="row">
<div class="col-xs-12">

<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
<div class="row">
<div class="col-sm-12">

<div class="col-xs-4">

          <a href="{{url('users/create')}}" class="btn btn-primary">Add a Client</a>

        </div>

        <div class="col-xs-4">

          <a href="{{url('user/excel')}}" class="btn btn-primary">Download Excel</a>

        </div>
        </div><br>
        <link href="{{asset("plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables/jquery.dataTables.css')}}">-->
    


     {!! Datatable::table()
    ->addColumn('First Name','Last Name','Email','Role','Action')       // these are the column headings to be shown
    ->setUrl(url('user'))   // this is the route where data will be retrieved
    ->render() !!}
              
                    </div>
                    </div>
                    </div>
                    
                    </section>
                    </div>


        <!-- jQuery -->
       
        <!-- App scripts -->

       
@stop