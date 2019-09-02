<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use App\Products;
use App\Poducts_attribute;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::InRandomOrder()->take(12)->get();
        return view('shop')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fao()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function SearchPrice(Request $request)
    {
        $min  = $request->input('min');
        $max  = $request->input('max');

        $search =Products::whereBetween('p_price', [$min, $max])->get();
        //dd($search);
        
        return view('shop')->with('search', $search);


    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $item = Poducts_attribute::where('p_slug', $slug)->firstOrFail();
        $product = Products::where('p_slug', $slug)->firstOrFail();

        $youmaylike = Products::where('p_slug','!=', $slug)->InRandomOrder()->take(4)->get();

        return view('item')->with([
            'product' => $product,
            'youmaylike' => $youmaylike,
            'item' => $item,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
