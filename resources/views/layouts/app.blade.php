<style>

</style>
	@include('inc/header')

<body>

<div class="container-fluid">

	<div class="header-back">
		<div class="triangle-left float-left">
			<div class="jumbotron text-white text-center" style="margin-bottom:0">
				
			  <h1>50% off</h1>
			  <p>For Eid special</p> 

			</div>
		</div>
		
		<div class="triangle-right float-right">
			<div class="jumbotron text-center" style="margin-bottom:0">
				
			  <h1>Chahida</h1>
			  <p>An Online Shopping Store</p> 


			</div>
		</div>
	</div>
	@include('inc/navbar')
	
</div>
<br>
<br>
		@yield('content')

		<div class="container-fluid">
			<div class="footer mt-5">
				<div class="row">
						<div class="col-md-12">
							<div class="foot text-center">
								<h3 class="text-white">Thanks for your participation</h3>
								<p class="text-white">Give us your mail address for more offers & exclusive products</p>

								<form action="" class="form-group">
									<input type="email" name="any_email" class="form-control">
									<br>
									<input type="submit" value="Submit" class="btn btn-danger">
								</form>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12 text-center">
							<p class="text-white ">@Copyrights are reserved</p>
						</div>
					</div>
				</div>
			</div>

	@include('inc/footer')