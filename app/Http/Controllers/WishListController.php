<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wishlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function empty()
    {
         Cart::instance('wishlist')->destroy();

        return redirect()->route('wishlist.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->p_id;

        });

        if($duplicates->isNotEmpty()){

            return redirect()->route('wishlist.index')->with('success','Item is already in your wishlist');

        }
             Cart::instance('wishlist')->add([
            'id' => $request->p_id, 
            'name' => $request->p_name, 
            'qty' => $request->p_qtn, 
            'price' => $request->p_price, 
            'weight' => 1, 
            'options' => ['size' => $request->p_size, 
                          'color'=>$request->p_color]
                        ])->associate('App\Products');

             //dd(Cart::content());


        return redirect()->route('wishlist.index')->with('success', "Item was added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Cart::instance('wishlist')->remove($p_id);

        return back()->with('success','Item has been deleted');
    }
}
