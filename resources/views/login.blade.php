@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div id="login-overlay" class="modal-dialog">
		      <div class="modal-content">
		          <div class="modal-header">
		              
		              <h4 class="modal-title" id="myModalLabel">Get access & have amazing products</h4>
		          </div>
		          <div class="modal-body">
		          	@include('message')
		              <div class="row">
		                  <div class="col-xs-12">
		                      <div class="well">
		                          <form id="loginForm" method="POST" action="{{route('login_action')}}" novalidate="novalidate">
		                          		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		                              <div class="form-group">
		                                  <label for="username" class="control-label required-star">Email</label>
		                                  <input type="text" class="form-control required" id="email" name="email" value=""  title="Please enter you username" placeholder="">
		                                 
		                              </div>
		                              <div class="form-group">
		                                  <label for="password" class="control-label required-star">Password</label>
		                                  <input type="password" class="form-control required" id="password" name="password" value=""  title="Please enter your password">
		                                  
		                              </div>
		                              <!--
		                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>-->
		                              <div class="checkbox">
		                                  <a class="help-block">Forget password</a>
		                              </div>
		                              <br>
		                              <button type="submit" class="btn btn-danger btn-block">Login</button>
		                             
		                          </form>
		                      </div>
		                  </div>
		                  <div class="col-xs-12">
		                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
		                      <ul class="list-unstyled" style="line-height: 2">
		                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
		                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
		                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
		                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
		                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
		                          
		                      </ul>
		                      <br>
		                      <p><a href="{{route('register')}}" class="btn btn-info btn-block">Yes please, register now!</a></p>
		                  </div>
		              </div>
		          </div>
		      </div>
		  </div>

		</div>
	</div>
</div>



@endsection

@section('footer-script')
<script type="text/javascript">
	$(document).ready(function () {
		$("form#loginForm").validate();
	});
</script>
@endsection