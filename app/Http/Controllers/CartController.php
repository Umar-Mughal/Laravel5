<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin_area\Product;
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
        $cart_items=Cart::content();
        return view('shoping_cart',compact('cart_items'));
    }

    public function add($id)
    {
        $product=Product::findOrFail($id);

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 1,
            'options' => ['image' => $product->image,
                          'code' => $product->code,  
                     ],
        ])->setTaxRate(0);

        return redirect('home');
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
    public function update(Request $request, $rowId)
    {
        
        Cart::update($rowId,$request->qty);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return redirect()->back();
    }

    public function empty_cart(){

        Cart::destroy();

        return redirect()->back();
    }

}
