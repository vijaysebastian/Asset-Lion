<div class="modal fade in" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="position: initial; display: list-item;">
  <div class="modal-dialog" role="document" style="width: 100%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>