@extends('layouts.app')

@section('content')

<div class="container mb-4">
    <div class="row">
        <div class="col-6">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th scope="col">Product</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price (TK)</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td>Product Name Dada</td>
                            <td>Red</td>
                            <td>Medium</td>
                            <td><center>3</center></td>
                            <td class="text-right">124,90</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                           
                            <td>Product Name Toto</td>
                            <td>Red</td>
                            <td>Medium</td>
                            <td><center>1</center></td>
                            <td class="text-right">33,90</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                           
                            <td>Product Name Titi</td>
                            <td>Red</td>
                            <td>Medium</td>
                            <td><center>4</center></td>
                            <td class="text-right">70,00</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">255,90</td>
                            <td>TK</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">6,90</td>
                            <td>TK</td>
                        </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>CC</td>
                            <td class="text-right">6,90</td>
                            <td>TK</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>346,90</strong></td>
                            <td><strong>TK</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-6">
        	<h1>Billing address</h1>
        </div>
        
        <div class="col mb-2 mt-5">
            <div class="row">
                <div class="col-sm-12  col-md-12">
                    <a href="{{route('success')}}" class="btn btn-lg btn-block btn-dark text-uppercase">Order Now </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection