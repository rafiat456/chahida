@extends('layouts.app')
<style>
	
.card-body{
	height:auto !important;
}
.progress{
	border-radius: 0 !important;
}
nav > .nav.nav-tabs{

  border: none;
    color:#fff;
    background:#272e38;
    border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
  border: none;
    padding: 18px 25px;
    color:#fff;
    background:#272e38;
    border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
 {
  content: "";
  position: relative;
  bottom: -50px;
  left: -10%;
  border: 15px solid transparent;
  border-top-color: black ;
}
.tab-content{
  background: #fdfdfd;
    line-height: 25px;
    border: 1px solid #ddd;
    border-top:5px solid black;
    border-bottom:5px solid black;
    padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
  border: none;
    background: black;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}
</style>
<link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('/css/fancybox/jquery.fancybox.css')}}">
@section('content')



<div class="container">
	<div>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	    <li class="breadcrumb-item"><a href="{{route('shop')}}">Shop</a></li>
	    <li class="breadcrumb-item active" aria-current="page">{{$product->p_name}}</li>
	  </ol>
	</div>
</div>
<div class="container main">
	

<div class="card">
	<div class="row">
		<aside class="col-sm-7">
			<!--<article class="gallery-wrap"> 
			<div class="img-big-wrap">
			  <div> <a href="#"><img src="{{asset('images/3.jpg')}}"></a></div>
			</div> <!-- slider-product.// -->
			<!--<div class="img-small-wrap">
			  <div class="item-gallery"> <img src="{{asset('images/1.jpg')}}"> </div>
			  <div class="item-gallery"> <img src="{{asset('images/2.jpg')}}"> </div>
			  <div class="item-gallery"> <img src="{{asset('images/4.jpg')}}"> </div>
			  <div class="item-gallery"> <img src="{{asset('images/5.jpg')}}"> </div>
			</div> <!-- slider-nav.// -->
			<!--</article> <!-- gallery-wrap .end// -->
			<div class="gallery clearfix">
			  <div class="pics clearfix">
			      <div class="thumbs">
			          <div class="preview"> 
			            <a href="#" class="selected" data-full="{{asset('images/3.jpg')}}" data-title=""> 
			              <img src="{{asset('images/3.jpg')}}"/> 
			            </a> 
			          </div>
			          <div class="preview"> <a href="#" data-full="{{asset('images/1.jpg')}}" data-title=""> <img src="{{asset('images/1.jpg')}}"/> </a> </div>
			          <div class="preview"> <a href="#" data-full="{{asset('images/2.jpg')}}" data-title="" Hill"> <img src="{{asset('images/2.jpg')}}"/> </a> </div>
			          <div class="preview"> <a href="#" data-full="{{asset('images/4.jpg')}}" data-title=""> <img src="{{asset('images/4.jpg')}}"/> </a> </div>
			          <div class="preview"> <a href="#" data-full="{{asset('images/2.jpg')}}" data-title=""> <img src="{{asset('images/2.jpg')}}"/> </a> </div>
			      </div>
			      <a href="{{asset('images/3.jpg')}}" class="full" title="Laptop
			      "> 
			      <!-- first image is viewable to start --> 
			      <img src="{{asset('images/3.jpg')}}"> </a> 
			  </div>
		</aside>
		<aside class="col-sm-5">
<article class="card-body p-5 full-height">
	<h3 class="title mb-3">{{$product->p_name}}</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		
		<span class="currency">TK </span><span class="num" data-num="{{$product->p_price}}">{{$product->p_price}}</span>
	
	</span> 
	<!--<span>/per kg</span> -->
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>About</dt>
  <dd><p>{{$product->p_description}} </p></dd>
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
				 <!--<dt >Quantity: </dt>
				 <dd>
				 <div class="quantity">
                   <div class="form-group col-md-12">
					  <input type="text" name="p_qtn" class="qtn form-control form-control-sm" value="1" placeholder="1">
					</div>
                </div>
                </dd>-->
			 <dt>Quantity: </dt>
			  <dd>
			  	<select id="qtn" name="p_qtn" class="qtn form-control form-control-sm" style="width:70px;">
			  		<option value = "1"> 1 </option>
			  		<option value = "2"> 2 </option>
			  		<option value = "3"> 3 </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		<div class="col-sm-4">
			<dl class="param param-inline">
			  <dt>Color: </dt>
			  <dd>
			  	<select id="p_color" name="p_item_color" class="form-control form-control-sm" style="width:70px;">
			  		<option value="{{$item->p_color_1}}"> {{$item->p_color_1}} </option>
			  		<option value="{{$item->p_color_2}}"> {{$item->p_color_2}} </option>
			  		<option value="{{$item->p_color_3}}"> {{$item->p_color_3}} </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> 
		<div class="col-sm-4">
			<dl class="param param-inline">
			  <dt>Size: </dt>
			  <dd>
			  	<select id="p_size" name="p_item_size"class="form-control form-control-sm psize" style="width:70px;">
			  		<option value="{{$item->p_size_1}}"> {{$item->p_size_1}} </option>
			  		<option value="{{$item->p_size_2}}"> {{$item->p_size_2}} </option>
			  		<option value="{{$item->p_size_3}}"> {{$item->p_size_3}} </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> 
	</div> <!-- row.// -->
	<hr>
	<a href="#" class="btn btn-info text-uppercase"> <i class="fa fa-heart"></i> Wishlist </a>
	<form action="{{route('cart.store')}}" method="post" class="float-right">
		@csrf
		<input type="hidden" name="p_id" value="{{$product->p_id}}">
		<input type="hidden" name="p_name" value="{{$product->p_name}}">
		<input type="hidden" id="price" name="p_price" value="{{$product->p_price}}">
		<input type="hidden" id="pqtn" name="p_qtn" value="1">
		<input type="hidden" id="size" name="p_size" value="small">
		<input type="hidden" id="color" name="p_color" value="black">
			<button type="submit" class="btn  btn-info text-uppercase"> <i class="fa fa-cart-arrow-down"></i> Add to cart </button>
	</form>
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->

<br><br><br>

<div class="row">
                <div class="col-xs-12 col-md-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Specification</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Faq</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</a>
                    
                    </div>
                  </nav>
                  <div class="tab-content py-5 px-5 " id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <div class="row ">
					    <div class="col-md-3 text-center">
					        <div class="card-body">
					            <h1 class="text-danger">4.5</h1>
					            <div class="sub-row text-warning">
					                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
					            </div>
					            <p>1 rating</p>
					        </div>
					    </div>
					 	<div class="col-md-5">
					        <div class="card-body">
					            <div class="row">
					                <div class="col-md-3">
					                    <h6>5 Stars</h6>
					                </div>
					                <div class="col-md-7 pt-1">
					                    <div class="progress">
			                              <div class="progress-bar bg-warning" style="width:80%"></div>
			                            </div>
					                </div>
					                <div class="col-md-2">
					                    <h6>(1)</h6>
					                </div>
					            </div>
					            <div class="row">
					                <div class="col-md-3">
					                    <h6>4 Stars</h6>
					                </div>
					                <div class="col-md-7 pt-1">
					                    <div class="progress">
			                              <div class="progress-bar bg-warning" style="width:60%"></div>
			                            </div>
					                </div>
					                <div class="col-md-2">
					                    <h6>(1)</h6>
					                </div>
					            </div>
					            <div class="row">
					                <div class="col-md-3">
					                    <h6>3 Stars</h6>
					                </div>
					                <div class="col-md-7 pt-1">
					                    <div class="progress">
			                              <div class="progress-bar bg-warning" style="width:30%"></div>
			                            </div>
					                </div>
					                <div class="col-md-2">
					                    <h6>(1)</h6>
					                </div>
					            </div>
					            <div class="row">
					                <div class="col-md-3">
					                    <h6>2 Stars</h6>
					                </div>
					                <div class="col-md-7 pt-1">
					                    <div class="progress">
			                              <div class="progress-bar bg-warning" style="width:20%"></div>
			                            </div>
					                </div>
					                <div class="col-md-2">
					                    <h6>(1)</h6>
					                </div>
					            </div>
					            <div class="row">
					                <div class="col-md-3">
					                    <h6>1 Star</h6>
					                </div>
					                <div class="col-md-7 pt-1">
					                    <div class="progress">
			                              <div class="progress-bar bg-warning" style="width:10%"></div>
			                            </div>
					                </div>
					                <div class="col-md-2">
					                    <h6>(1)</h6>
					                </div>
					            </div>
					        </div>
					    </div>
					    <div class="col-md-4  text-center">
					        <div class="card-body">
					            <i class="fa fa-pencil-square fa-3x text-success"></i>
					            <a href="{{route('login')}}"><h4>Write your reviews</h4></a>
					            <small>Buy product & Share your experience with us</small>
					        </div>
					    </div>
				    </div>
	    
                    </div>
                   
                  </div>
                
                </div>
              </div>
        </div>
      </div>
     </div>
     
		

<!--container.//-->
 @include('inc/youmaylike')

@endsection

@section('thumbnail-gallery')
	<script>
  $(document).ready(function(){

      $(".preview a").on("click", function(){
          $(".selected").removeClass("selected");
          $(this).addClass("selected");
          var picture = $(this).data();
          
          event.preventDefault(); //prevents page from reloading every time you click a thumbnail


          $(".full img").fadeOut( 100, function() { 
            $(".full img").attr("src", picture.full);
            $(".full").attr("href", picture.full);
            $(".full").attr("title", picture.title);

        }).fadeIn();


      });// end on click

      $(".full").fancybox({
          helpers : {
              title: {
                  type: 'inside'
              }
          },
          closeBtn : true,
      });


  });//end doc ready

  $(document).ready(function(){
	$(".main").on("change", ".qtn", function(e){
		var price = +$(".num").data("num");
		var quantity = +$(this).val();
		
		//var p_size = $("#p_size option:selected").val();
		//$("#size").val(p_size);

		$(".num").text(price * quantity);

		$("#pqtn").val(quantity);
		$("#price").val(price * quantity);
		

	})
});

   $(document).ready(function(){
	$(".main").on("change", function(e){
		var p_color = $("#p_color option:selected").val(); 
		var p_size = $("#p_size option:selected").val();
		$("#size").val(p_size);
		$("#color").val(p_color);

	})
});









  </script>
@endsection