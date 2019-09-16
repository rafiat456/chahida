 <div class="panel">
	<ul class="list-group">
	@foreach($childs as $child)
	<?php $catlink=$catlink.'/'.$child->cat_slug ?>
	 <?php

      $subparent=$dataparent.'/'.$child->cat_slug;

      ?>
		 @if(count($child->childs))
	         <button class="accordion float-left">{{ $child->cat_name }}<span class="fa fa-plus float-right"></span></button>


	            @include('inc/subcategory',['childs' => $child->childs,'dataparent' =>$subparent])
	            @else
	            <li class="list-group-item"><span class="fa fa-angle-double-right"></span><a class="text-dark" href="{{$subparent}}">{{ $child->cat_name }}</a></li>
        @endif
        
	@endforeach
			
	
</div>