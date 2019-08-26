@extends('layouts.app')

@section('content')



<div class="container">
	<div>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	    <li class="breadcrumb-item"><a href="{{route('shop')}}">Shop</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Item</li>
	  </ol>
	</div>
</div>
<div class="container">
	

<div class="card">
	<div class="row">
		<aside class="col-sm-5">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="{{asset('images/3.jpg')}}"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="{{asset('images/1.jpg')}}"> </div>
  <div class="item-gallery"> <img src="{{asset('images/2.jpg')}}"> </div>
  <div class="item-gallery"> <img src="{{asset('images/4.jpg')}}"> </div>
  <div class="item-gallery"> <img src="{{asset('images/5.jpg')}}"> </div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-7">
<article class="card-body p-5 full-height">
	<h3 class="title mb-3">{{$product->p_name}}</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		
		<span class="currency">TK </span><span class="num">{{$product->p_price}}</span>
	
	</span> 
	<!--<span>/per kg</span> -->
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Description</dt>
  <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco </p></dd>
</dl>
<dl class="param param-feature">
  <dt>Model</dt>
  <dd>{{$item->p_slug}}</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Availability</dt>
  @if($item->p_stock == 1)
  <dd><i style="padding-left: 0;" class="fa fa-check-circle text-success"></i>In Stock</dd>
  @else
  <dd><i style="padding-left: 0;" class="fa fa-times-circle text-danger"></i>Out of stock</dd>
  @endif
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Delivery Time</dt>
  
  <dd>{{$product->p_delivery_time}}</dd>

</dl>  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-4">
			<dl class=" text-center param param-inline">
				 <dt >Quantity: </dt>
				 <dd>
				 <div class="quantity">
                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                    <input type="text" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1" style="width:50px;">
                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                </div>
                </dd>
			 <!-- <dt>Quantity: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
			  	</select>
			  </dd>-->
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		<div class="col-sm-4">
			<dl class="param param-inline">
			  <dt>Color: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> {{$item->p_color_1}} </option>
			  		<option> {{$item->p_color_2}} </option>
			  		<option> {{$item->p_color_3}} </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> 
		<div class="col-sm-4">
			<dl class="param param-inline">
			  <dt>Size: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> {{$item->p_size_1}} </option>
			  		<option> {{$item->p_size_2}} </option>
			  		<option> {{$item->p_size_3}} </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> 
	</div> <!-- row.// -->
	<hr>
	<a href="#" class="btn btn-lg btn-info text-uppercase"> Buy now </a>
	<a href="{{route('cart')}}" class="btn btn-lg btn-info text-uppercase"> <i class="fa fa-cart-arrow-down"></i> Add to cart </a>
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->
@endsection