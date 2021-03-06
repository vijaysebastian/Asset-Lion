@extends('themes.default1.layouts.master')
@section('content')
<div class="box box-primary">
<div class="box-header">
    <h2 class="box-title">Projects</h2></div>

<div class="box-body table-responsive no-padding">
<section class="content">
<div class="row">
<div class="col-xs-12">

<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
<div class="row">
<div class="col-sm-12">
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('success')}}
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

        <div class="col-xs-6">

          <a href="{{url('projects/create')}}" class="btn btn-primary">Add a Project</a>

        </div>

        
        <div class="col-xs-6">

             {!! Form::open(['url'=>'#','method'=>'get']) !!}

                <div class="col-xs-6">
                    
                    <input type="text" class="search form-control" id="searchid" placeholder="Search for people" /> 
                 <div id="result"></div>
                </div>

               

                 <div class="col-xs-6">

                        {!! Form::submit('Search',['class'=>'form-group btn btn-default search-bar-btn'])!!}

                </div>

                 

                {!! Form::close() !!}
        </div>

    <table id="example1" class="table table-bordered table-striped" >

<link href="{{asset("plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
           <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    
                    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

                        <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>City</th>
                                <th>Minimum Price</th>
                                <th>Maximum Price</th>
                                <th>Type</th>
                                <th>Configuration</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                            <tbody id="ok">
                            @foreach($project as $users)
                            <tr>
                                <td></td>
                                <td>{!! $users->title !!}</td>
                                <td>{!! $users->city !!}</td>
                                <td>{!! $users->min_price !!}</td>
                                <td>{!! $users->max_price !!}</td>
                                <td>{!! $users->type !!}</td>
                                <td>{!! $users->configuration !!}</td>
                                <td>
                                   <a href="#"><li class="fa  fa-trash" title="delete" data-toggle="modal" data-target="#{{$users->slug}}delete1"></li></a>
                                            <div class="modal fade" id="{{$users->slug}}delete1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title">Delete</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to Delete {{$users->first_name}} ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                            <a href="{{url('projects/delete/'.$users->slug)}}"><button type="button" id="{{$users->slug}}delete" class="btn btn-default pull-right">delete</button></a>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                    <a href="{{url('projects/'.$users->slug.'/edit')}}"><li class="fa  fa-edit" title="edit"></li></a>
                                    <a href="{{url('projects/'.$users->slug)}}"><li class="fa  fa-eye" title="show"></li></a>


                                </td>
                                
                            </tr>
                           
                    @endforeach
                    
                        </tbody>
                        </table>
                        
              <div class="sixteen columns">
                    <?php echo $project->render();?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </section>

<!-- 960 Container / End -->
<script src="{{asset("plugins/datatables/jquery.dataTables.js")}}" type="text/javascript"></script>
<script src="{{asset("plugins/datatables/dataTables.bootstrap.js")}}" type="text/javascript"></script>
<script type="text/javascript">
    $('#example1').dataTable({"bFilter": false,"bPaginate": false,"bInfo": false,"oLanguage": {"sEmptyTable":     "No data available"}});
</script>
@stop
