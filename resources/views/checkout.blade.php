@extends('layouts.app')
<style>
    .bill-cart{
        box-shadow: 0px 0px 2px #ced4da;
        padding: 10px;
    }
</style>
@section('content')

 <section id="checkout-container">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-4 order-md-2 mb-4">
                       <!-- <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                            <span class="badge badge-secondary badge-pill">3</span>
                        </h4>-->
                        <br>
                        <br>
                        
                        
                        <ul class="list-group mb-3 bill-cart">
                            @foreach(Cart::content() as $item)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">{{$item->model->p_name}}</h6>
                                    <small class="text-muted">{{$item->model->p_description}}</small>
                                </div>
                                <span class="text-muted">{{$item->model->p_price}}</span>
                            </li>
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>EXAMPLECODE</small>
                                </div>
                                <span class="text-success">-$5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (TK)</span>
                                <strong>20</strong>
                            </li>
                        </ul>
                     
                        <!--<form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Apply</button>
                                </div>
                            </div>
                        </form>
                        <div class="payment-methods">
                            <p class="pt-4 mb-2">Payment Options</p>
                            <hr>
                        
                        </div>-->
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Billing address</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="email">Email
                                    <span class="text-muted">(Optional)</span>
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">District</label>
                                    <select class="custom-select d-block w-100" id="country" required>
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid district.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">City</label>
                                    <select class="custom-select d-block w-100" id="state" required>
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>
                             <div class="mb-3">
                                <label for="address">Contact</label>
                                <input type="text" class="form-control" id="address" placeholder="01677317694" required>
                                <div class="invalid-feedback">
                                    Please enter your phone number.
                                </div>
                            </div>
                           <!-- <hr class="mb-4">-->
                           
                            <!--<div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                            </div>-->

                           
                            <hr class="mb-4">

                            <h4 class="mb-3">Payment</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Cash on delivery</label>
                                </div>
                               
                            </div>
                          
                           
                            <hr class="mb-4">
                            <a href="{{route('order')}}" class="btn btn-dark btn-lg btn-block" type="submit">
                                <i class="fa fa-credit-card"></i> Continue to checkout 
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection