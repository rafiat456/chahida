@extends('layouts.app')

@section('content')

<style>

</style>

	<div class="container">
	<div class="row">
		<div class="col-md-3">
			<button class="accordion float-left">Electronic<span class="fa fa-plus float-right"></span></button>
			
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Tv</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Car</a></li>
				</ul>
			</div>

			<button class="accordion">Food<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a  class="text-dark" href="#">Burger</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Pizza</a></li>
				</ul>
			
			</div>
			<button class="accordion">Vegetables<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				 <ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Alu</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Potol</a></li>
				</ul>
			</div>
			<button class="accordion float-left">Electronic<span class="fa fa-plus float-right"></span></button>
			
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Tv</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Car</a></li>
				</ul>
			</div>

			<button class="accordion">Food<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a  class="text-dark" href="#">Burger</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Pizza</a></li>
				</ul>
			
			</div>
			<button class="accordion">Vegetables<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				 <ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Alu</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Potol</a></li>
				</ul>
			</div>
			<button class="accordion float-left">Electronic<span class="fa fa-plus float-right"></span></button>
			
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Tv</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Car</a></li>
				</ul>
			</div>

			<button class="accordion">Food<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a  class="text-dark" href="#">Burger</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Pizza</a></li>
				</ul>
			
			</div>
			<button class="accordion">Vegetables<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				 <ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Alu</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Potol</a></li>
				</ul>
			</div>
			<button class="accordion">Food<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a  class="text-dark" href="#">Burger</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Pizza</a></li>
				</ul>
			
			</div>
			<button class="accordion">Food<span class="fa fa-plus float-right"></span></button>
			<div class="panel">
				<ul class="list-group">
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a  class="text-dark" href="#">Burger</a></li>
					<li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">Pizza</a></li>
				</ul>
			
			</div>
		</div>

		<div class="col-md-9 mb-5">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{asset('images/slide-3.jpg')}}" alt="Los Angeles" class="img_size">
			      <div class="carousel-caption">
			        <a href="#" class="btn btn-danger btn-lg">Discover</a>
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('images/slide-2.jpg')}}" alt="Chicago" class="img_size">
			      <div class="carousel-caption">
			        <a href="#" class="btn btn-danger btn-lg">Discover</a>
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('images/slide-1.jpg')}}" alt="New York" class="img_size">
			      <div class="carousel-caption">
			        <a href="#" class="btn btn-danger btn-lg">Discover</a>
			      </div>   
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>
	</div>
	
	<div class="service">
		<div class="row">
			<div class="lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="facility">
					<h3 class="text-dark"><span class="fa fa-truck"></span>Fastest Delivery</h3>
					<p class="text-dark">Most of the case we deliver within three days</p>
				</div>
			</div>
			<div class="lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="facility">
					<h3 class="text-dark"><span class="fa fa-headphones"></span> Customer Support</h3>
					<p class="text-dark">Always at your service with instant solution</p>
				</div>
			</div>
			<div class="lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="facility">
					<h3 class="text-dark"><span class="fa fa-angellist"></span>Safe payment</h3>
					<p class="text-dark">Always pay after checking the product</p>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<h2>Occasional <b>Products</b></h2>

	<div class="row">

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_1.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Camera</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_2.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Laptop</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_1.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Camera</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_2.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Laptop</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>
	</div>
	<br>
	<div class="row">

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_1.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Camera</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_2.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Laptop</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_1.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Camera</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>

	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	      <div class="hovereffect">
	        <img class="img-responsive" src="{{asset('images/advertise_2.jpg')}}" alt="">
	        <div class="overlay">
	          <h1>Laptop</h1>
					  <p><a class="btn btn-info" href="#">Details</a></p> 
	        </div>
	      </div>
	    </div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<br><br>
			<h2>Trending <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner full-height">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPad</h4>
									<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Headphone</h4>
									<p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Air</h4>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Nikon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Play Station</h4>
									<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Pro</h4>
									<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Bose Speaker</h4>
									<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy S8</h4>
									<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPhone</h4>
									<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Canon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Google Pixel</h4>
									<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple Watch</h4>
									<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>


	<br><br>
	<h2>All <b>Products</b></h2>
	<div class="row">

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="card ">
				<div class="card-header">
					<h6 class="text-dark"><strong>Exclusive Item</strong></h6>
				</div>
				<div class="card-body">
					<img src="{{asset('images/6.jpg')}}" class="card-img" alt="">
				</div>
				<div class="card-footer  text-center">
					<a href="#" class="btn btn-info">Details</a>
					<a href="#" class="btn btn-info">Buy now</a>
				</div>
			</div>
			<hr>
			<div class="card ">
					<div class="card-header">
						<h6 class="text-dark"><strong>Exclusive Item</strong></h6>

						
					</div>
					<div class="card-body">
						<img src="{{asset('images/8.jpg')}}" class="card-img" alt="">
					</div>
					<div class="card-footer  text-center">
						<a href="#" class="btn btn-info">Details</a>
						<a href="#" class="btn btn-info">Buy now</a>
					</div>
			</div>
			<hr>
			<div class="card ">
					<div class="card-header">
						<h6 class="text-dark"><strong>Exclusive Item</strong></h6>

						
					</div>
					<div class="card-body">
						<img src="{{asset('images/9.jpg')}}" class="card-img" alt="">
					</div>
					<div class="card-footer text-center">
						<a href="#" class="btn btn-info ">Details</a>
						<a href="#" class="btn btn-info ">Buy now</a>
					</div>
			</div>
			<hr>
			<div class="card ">
					<div class="card-header">
						<h6 class="text-dark"><strong>Exclusive Item</strong></h6>

						
					</div>
					<div class="card-body">
						<img src="{{asset('images/10.jpg')}}" class="card-img" alt="">
					</div>
					<div class="card-footer  text-center">
						<a href="#" class="btn btn-info ">Details</a>
						<a href="#" class="btn btn-info ">Buy now</a>
					</div>
			</div>

		</div>

			

		<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
			<div class="row">
	@foreach($all_products as $product)
			  <div class="col-md-3  col-sm-6 col-xs-6">
			    <div class="img-thumbnail">
			      	<a href="/shop/{{$product->p_slug}}"><img src="{{asset('images/3.jpg')}}" alt="" class="img_size"></a>
		     	</div>
	      		<div class="caption text-center">
	      			<br>
	      			<div class="thumb-content">
									<h4><a href="/shop/{{$product->p_slug}}">{{$product->p_name}}</a></h4>
									<p class="item-price"><strike>600</strike> <span>{{$product->p_price}}</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-info">Add to Cart</a>
									<br><br><br>
								</div>
	    		</div>
			  </div>
				
			  @endforeach
			</div>
			<br>
			
			<div class="row mt-4 ">
				<div class="col-md-12 col-sm-12">
				  <a href="{{route('shop')}}" class="btn btn-lg btn-block btn-dark">View more</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection