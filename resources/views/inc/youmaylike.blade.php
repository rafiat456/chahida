<style>
	.img-thumbnail {
	    height: 350px;
	}

</style>
<br><br><br>
<div class="container">
<h2>You may <b>like</b></h2>


		
			<div class="row">
	@foreach($youmaylike as $yml)
			  <div class="col-md-3  col-sm-6 col-xs-6">
			    <div class="img-thumbnail">
			      	<a href="/shop/{{$yml->p_slug}}"><img src="{{asset('images/3.jpg')}}" alt="" class="img_size"></a>
		     	</div>
	      		<div class="caption text-center">
	      			<br>
	      			<div class="thumb-content">
									<h4><a href="/shop/{{$yml->p_slug}}">{{$yml->p_name}}</a></h4>
									<p class="item-price"><strike>600</strike> <span>{{$yml->p_price}}</span></p>
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
		
</div>