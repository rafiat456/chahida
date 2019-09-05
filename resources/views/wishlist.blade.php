@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/core-style.css')}}">
@section('content')


<div class="container">
	<div>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	    <li class="breadcrumb-item"><a href="{{route('shop')}}">Shop</a></li>
	    <li class="breadcrumb-item"><a href="{{route('shop')}}">Item</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
	  </ol>
	</div>
</div>

<div class="cart_area clearfix">
            <div class="container">

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert aler-danger">
                        <ul>
                            @foreach($errors->all as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if(Cart::instance('wishlist')->content()->count() > 0)

                    <h3>{{Cart::instance('wishlist')->content()->count()}} item(s) were added</h3>
                    <br>
                <div class="row">
                    <div class="col-12">
                        
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach(Cart::instance('wishlist')->content() as $item)
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="{{route('shop.show', $item->model->p_slug)}}"><img src="{{asset('images/3.jpg')}}" alt="Product"></a>
                                            <h6>{{$item->model->p_name}}</h6>
                                        </td>
                                        <td class="price"><span>{{$item->options->color}}</span></td>
                                        <td class="price"><span>{{$item->options->size}}</span></td>
                                        <td class="price"><span>{{$item->price}}</span></td>
                                        <td class="qty">
                                           <input type="number" calss="quantity" value="{{$item->qty}}">
                                           
                                            <!--<div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="text" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="{{$item->qty}}">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>-->
                                        </td>
                                        <td class="total_price"><span>{{$item->subtotal()}}</span></td>
                                        <td>
                                            <form action="{{route('wishlist.destroy', $item->rowId)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button><i class="fa fa-remove"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>

                                @endforeach
                            </table>
                        </div>
                        

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="{{route('shop')}}">Continue shooping</a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                                <a href="{{route('wishlist.empty')}}">clear list</a>
                                <a href="#">Update list</a>
                            </div>
                        </div>

                    </div>
                </div>
                @else

                            <h3>No item was added</h3>
                @endif

            
            </div>
        </div>
@endsection

