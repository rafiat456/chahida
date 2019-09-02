<?php
$parent = App\Libraries\CommonFunction::getParentCategory();
$allcategory= App\Libraries\CommonFunction::getAllCategory();
?>

 	
	@foreach($parent as $category)
	  	
	        @if(count($category->childs))
	         <button class="accordion float-left">{{ $category->cat_name }}<span class="fa fa-plus float-right"></span></button>
	            @include('inc/subcategory',['childs' => $category->childs])
	            @else
	            <span class="fa fa-angle-double-right"></span><a class="text-dark" href="#">{{$category->cat_name }}</a>
	        @endif

	@endforeach


			
			


			
