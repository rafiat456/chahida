@extends('layouts.app')

@section('content')





<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div id="login-overlay" class="modal-dialog">
		      <div class="modal-content">
		          <div class="modal-header">
		              
		              <h4 class="modal-title" id="myModalLabel">Free membership</h4>
		          </div>
		          <div class="modal-body">
		              <div class="row">
		                  <div class="col-xs-12 col-lg-12 col-md-12">
		                      <div class="well">
		                          <form id="loginForm" method="POST" action="" novalidate="novalidate">
		                              <div class="form-group">
		                                  <label for="username" class="control-label">Username</label>
		                                  <input type="text" class="form-control" id="username" name="username" value="" required placeholder="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="username" class="control-label">Email</label>
		                                  <input type="text" class="form-control" id="username" name="username" value="" required=""  placeholder="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="password" class="control-label">Password</label>
		                                  <input type="password" class="form-control" id="password" name="password" value="" required="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="password" class="control-label">Confirm Password</label>
		                                  <input type="password" class="form-control" id="password" name="password" value="" required="">
		                                  
		                              </div>
		                               <div class="form-group">
		                                  <label for="city" class="control-label">City</label>
		                                  <input type="text" class="form-control" id="city" name="city" value="" required="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="city" class="control-label"> Address</label>
		                                  <input type="text" class="form-control" id="city" name="city" value="" required="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="city" class="control-label">Postalcode</label>
		                                  <input type="text" class="form-control" id="city" name="city" value="" required="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="city" class="control-label">Phone</label>
		                                  <input type="text" class="form-control" id="city" name="city" value="" required="">
		                                  
		                              </div>
		                              <!--
		                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>-->
		                             
		                              <br>
		                              <button type="submit" class="btn btn-danger btn-block">Register</button>
		                             
		                          </form>
		                      </div>
		                  </div>
		              </div>
		          </div>
		      </div>
		  </div>

		</div>
	</div>
</div>
@endsection