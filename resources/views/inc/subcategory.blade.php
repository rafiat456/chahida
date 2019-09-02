 <div class="panel">
	<ul class="list-group">
	@foreach($childs as $child)
		 @if(count($child->childs))
	         <button class="accordion float-left">{{ $child->cat_name }}<span class="fa fa-plus float-right"></span></button>
	            @include('inc/subcategory',['childs' => $child->childs])
	            @else
	            <li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">{{ $child->cat_name }}</a></li>
	        @endif
        
	@endforeach
			
	
</div>