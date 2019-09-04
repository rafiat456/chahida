@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

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
						@if($errors->all())
							<div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
						@endif
		              	
		                  <div class="col-xs-12 col-lg-12 col-md-12 text-center">
		                  	<span>Note:(*) Must be Fillup</span>
		                  </div>
		              </div>
		              

		              <div class="row">
		                  <div class="col-xs-12 col-lg-12 col-md-12">
		                      <div class="well">
		                          <form id="registerForm" method="POST" action="{{route('resister_store')}}" novalidate="novalidate">
		                          	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		                              <div class="form-group">
		                                  <label for="u_name" class="control-label required-star">Name</label>
		                                  <input type="text" class="form-control required" id="username" name="u_name" value="" required placeholder="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="u_email" class="control-label required-star">Email</label>
		                                  <input type="email" class="form-control required" id="u_email" name="u_email" value="" required=""  placeholder="">
		                                  
		                              </div>
		                             <!--  <div class="form-group">
		                                 <label for="password" class="control-label">Password</label>
		                                 <input type="password" class="form-control" id="password" name="password" value="" required="">
		                                 
		                             </div>
		                             <div class="form-group">
		                                 <label for="password" class="control-label">Confirm Password</label>
		                                 <input type="password" class="form-control" id="password" name="password" value="" required="">
		                                 
		                             </div> -->
		                               <div class="form-group">
		                                  <label for="u_city" class="control-label required-star">City</label>
		                                  <input type="text" class="form-control required" id="u_city" name="u_city" value="" required="">
		                                  
		                              </div>
		                              <div class="form-group">
		                                  <label for="u_address" class="control-label required-star"> Address</label>
		                                  <input type="text" class="form-control required" id="city" name="u_address" value="" required="">
		                                  
		                              </div>
		                             
		                              <div class="form-group">
		                                  <label for="u_mobile" class="control-label required-star">Phone</label>
		                                  <input type="text" class="form-control required" id="city" name="u_mobile" value="" required="">
		                                  
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

@section('footer-script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("form#registerForm").validate({
			 u_email: {
      required: true,
      email: true,
      remote: {
        url: "check-email.php",
        type: "post",
        data: {
          username: function() {
            return $( "#username" ).val();
          }
        }
      }
    }
		});
	});

$(".js-example-tags").select2({
  tags: true
});
</script>
@endsection