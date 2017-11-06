<?php

namespace App\Http\Controllers;

use App\CustomerAddress;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Constant;
use Illuminate\Support\Facades\Config;

class CustomerAccountController extends Controller
{
   public function index()
   {
   	  	$cart_items=Cart::content();
   	  	$customer_address=CustomerAddress::where([
   	  		['customer_id', '=', Auth::id() ],
   	  		['address_type', '=', 2],
   	  	])->take(1)->get();
   	  	// $customer_address=CustomerAddress::where('customer_id',5)->get();
		return view('customer_account',compact('cart_items',
			'customer_address'));
   }

   public function create_billing_address()
   {
   	  	$cart_items=Cart::content();
		return view('customer.customer_address.form',compact('cart_items'));
   }
      public function checkout()
   {
   	  	$cart_items=Cart::content();
		return view('checkout',compact('cart_items'));
   }

   public function store_billing_address(Request $request)
   {
   	  	$requestData=$request->all();
   	  	$requestData['customer_id']=Auth::id();
   	  	$requestData['address_type']=2;
   	  	CustomerAddress::create($requestData);

   }

}
