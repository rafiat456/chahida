<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function empty(){

        Cart::destroy();

        return redirect()->route('cart.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
             
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->p_id;

        });

        if($duplicates->isNotEmpty()){

            return redirect()->route('cart.index')->with('success','Item is already in your cart');

        }
             Cart::add([
            'id' => $request->p_id, 
            'name' => $request->p_name, 
            'qty' => $request->p_qtn, 
            'price' => $request->p_price, 
            'weight' => 1, 
            'options' => ['size' => $request->p_size, 
                          'color'=>$request->p_color]
                        ])->associate('App\Products');

             //dd(Cart::content());


        return redirect()->route('cart.index')->with('success', "Item was added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        return view('checkout');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $p_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($p_id)
    {
        Cart::remove($p_id);

        return back()->with('success','Item has been deleted');
    }
}
