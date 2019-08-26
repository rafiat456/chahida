@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/core-style.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
@section('content')


<div class="container">
	<div>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Shop</a></li>
	  </ol>
	</div>
</div>


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
			<hr>
			<br>
			<br>
			<br>
			<div class="widget price mb-50">
                                <h6 class="widget-title mb-30">Filter by Price</h6>
                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Price: 0 - 1350</div>
                                    </div>
                                </div>
                            </div>

							

                            <div class="widget color mb-70">
                                <h6 class="widget-title mb-30">Filter by Color</h6>
                                <div class="widget-desc">
                                    <ul class="d-flex justify-content-between">
                                        <li class="gray"><a href="#"><span>(3)</span></a></li>
                                        <li class="red"><a href="#"><span>(25)</span></a></li>
                                        <li class="yellow"><a href="#"><span>(112)</span></a></li>
                                        <li class="green"><a href="#"><span>(72)</span></a></li>
                                        <li class="teal"><a href="#"><span>(9)</span></a></li>
                                        <li class="cyan"><a href="#"><span>(29)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                           
                            <div class="widget size mb-50">
                                <h6 class="widget-title mb-30">Filter by Size</h6>
                                <div class="widget-desc">
                                    <ul class="d-flex justify-content-between">
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>

			
		</div>
		
	<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
			<div class="row">
			  
			  @foreach($products as $product)
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
			<br><br>
			<div class="row mt-4 ">
				<div class="col-md-12 col-sm-12">
				  <ul class="pagination text-center">
				    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item"><a class="page-link" href="#">4</a></li>
				    <li class="page-item"><a class="page-link" href="#">5</a></li>
				    <li class="page-item"><a class="page-link" href="#">6</a></li>
				    <li class="page-item"><a class="page-link" href="#">7</a></li>
				    <li class="page-item"><a class="page-link" href="#">8</a></li>
				    <li class="page-item"><a class="page-link" href="#">9</a></li>
				    
				    <li class="page-item"><a class="page-link" href="#">Next</a></li>
				  </ul>
				</div>
			</div>
		</div>


	</div>
</div>



@endsection

