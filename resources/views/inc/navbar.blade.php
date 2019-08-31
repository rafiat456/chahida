
	<nav class="navbar navbar-expand-sm   navbar-dark text-center ">
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav m-triangle-left ml-auto mx-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('home')}}"><span class="fa fa-home"></span> Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('shop')}}"><span class="fa fa-shopping-basket"></span> Shop</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('contact')}}"><span class="fa fa-phone"></span> Contact</a>
	      </li>    
	  
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('register')}}"><span class= "fa fa-user"></span> Register</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('login')}}"><span class= "fa fa-unlock-alt"> </span> Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('cart.index')}}"><span class= "fa fa-cart-arrow-down"> </span> Cart 
				@if(Cart::instance('default')->count() > 0)
	        	<span class="badge badge-warning">{{Cart::instance('default')->count()}}</span>
	        	@endif
	        </a>
	      </li>    
	    </ul>

	  </div>  
	</nav>