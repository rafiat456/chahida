@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/core-style.css')}}">
@section('content')


<div class="container">
	<div>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	    <li class="breadcrumb-item"><a href="{{route('shop')}}">Shop</a></li>
	    <li class="breadcrumb-item"><a href="{{route('shop')}}">Item</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Cart</li>
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


                @if(Cart::count() > 0)

                    <h3>{{Cart::count()}} item(s) were added</h3>
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
                                @foreach(Cart::content() as $item)
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="{{route('shop.show', $item->model->p_slug)}}"><img src="{{asset('images/3.jpg')}}" alt="Product"></a>
                                            <h6>{{$item->model->p_name}}</h6>
                                        </td>
                                        <td class="price"><span>Red</span></td>
                                        <td class="price"><span>Small</span></td>
                                        <td class="price"><span>{{$item->model->p_price}}</span></td>
                                        <td class="qty">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="text" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </td>
                                        <td class="total_price"><span>50TK</span></td>
                                        <td>
                                            <form action="{{route('cart.destroy', $item->rowId)}}" method="post">
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
                                <a href="{{route('cart.empty')}}">clear cart</a>
                                <a href="#">Update cart</a>
                            </div>
                        </div>

                    </div>
                </div>
                @else

                            <h3>No item was added</h3>
                @endif

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="coupon-code-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cupon code</h5>
                                <p>Enter your cupone code</p>
                            </div>
                            <form action="#">
                                <input type="search" name="search" placeholder="#569ab15">
                                <button type="submit">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shipping-method-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Delivery Charge</h5>
                                <p>Select the one you want</p>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>In Dhaka</span><span>Free</span></label>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Out of Dhaka</span><span>60Tk</span></label>
                            </div>

                            
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span>50TK</span></li>
                                <li><span>Delivery Charge</span> <span>Free</span></li>
                                <li><span><strong>Total</strong></span> <span><strong>50TK</strong></span></li>
                            </ul>
                            <a style="width:100%;" href="{{route('checkout')}}" class="btn btn-dark btn-lg">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

