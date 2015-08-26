@extends('themes.default1.project.list')
@section('content')
<div data-scrollable>
<section class="content" style="padding-left: 70px;">
<div class="row">
<div class="col-xs-12">

<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
<div class="row">
<div class="col-sm-12">


       @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <b>Alert!</b> Success.
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


        <div class="col-xs-6 pull-right">

                {!! Form::open(['url'=>'clients','method'=>'get']) !!}

                    <div class="row pull-right">

                        <div class="col-xs-8">

                        {!! $errors->first('search', '<spam class="help-block">:message</spam>') !!}
                        {!! Form::text('search',null,['class' => 'form-control','placeholder'=>'Search']) !!}
                        </div>

                        
                         <div class="col-xs-4">

                        {!! Form::submit('Search',['class'=>'form-group btn btn-default search-bar-btn'])!!}

                        </div>

                    </div>

                {!! Form::close() !!}

            </div>

    <table id="example1" class="table table-bordered table-striped" >


                    
                    
                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                     <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
                     <link href="{{asset("plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />


                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody id="ok">
                            @foreach($contact as $users)
                            <tr>
                                <td>{!! studly_case($users->first_name) !!}</td>
                                <td>{!! studly_case($users->last_name) !!}</td>
                                <td>{!! $users->email !!}</td>
                                <td>{!! $users->message !!}</td>
                                <td>{!! $users->phone !!}</td>
                                <td>{!! $users->address !!}</td>
                                <td>
                               
                                   <a href="#"><li class="fa  fa-trash" title="delete" data-toggle="modal" data-target="#{{$users->id}}delete1"></li></a>
                                            <div class="modal fade" id="{{$users->id}}delete1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title">Delete</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to Delete ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                            <a href="{{url('users/delete/'.$users->id)}}"><button type="button" id="{{$users->id}}delete" class="btn btn-default pull-right">delete</button></a>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                    <a href="{{url('users/'.$users->id.'/edit')}}"><li class="fa  fa-edit" title="edit"></li></a>

                                     <a href="{{url('users/'.$users->id)}}"><li class="fa  fa-eye" title="show"></li></a>
                                    
                                    
	                                     @if($users->block=='0')
	                                     	 <a href="{{url('users/block/'.$users->id)}}"><li class="fa  fa-ban" title="block"></li>
	                                     @else
	                                     	 <a href="{{url('users/unblock/'.$users->id)}}"><li class="fa  fa-thumbs-up" title="unblock"></li>
	                                     @endif
                                     </a>
                                    


                                </td>
                                
                            </tr>
                           
                   
                    @endforeach
                    
                        </tbody>
                        </table>
                        
              <div class="sixteen columns">
                    <?php echo $contact->render();?>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    </section>
                    </div>

<!-- 960 Container / End -->
<script src="{{asset("plugins/datatables/jquery.dataTables.js")}}" type="text/javascript"></script>
<script src="{{asset("plugins/datatables/dataTables.bootstrap.js")}}" type="text/javascript"></script>
<script type="text/javascript">
    $('#example1').dataTable({"bFilter": false,"bPaginate": false,"bInfo": false});
</script>

@stop