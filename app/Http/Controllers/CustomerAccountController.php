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

   	  	$billing_address=CustomerAddress::where([
            ['customer_id', '=', Auth::id() ],
            ['address_type', '=', 5],
         ])->take(1)->get();   //Getting billing addres 

         $shipping_address=CustomerAddress::where([
   	  		['customer_id', '=', Auth::id() ],
   	  		['address_type', '=', 5],
   	  	])->take(1)->get();   //Getting shipping addres 

   	   


		return view('customer_account',compact('cart_items',
			'billing_address','shipping_address'));
   }

   public function create_billing_address(Request $request)
   {    
         $id=$request->address_type;
		   return view('layouts.customer.address.form',compact('id'));
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

         redirect()->route('customer_account');

   }

   public function edit_billing_address($id)
   {
      $customer_address=CustomerAddress::where([
            ['customer_id', '=', Auth::id() ],
            ['address_type', '=', $id],
         ])->first();

      // $customer_address=CustomerAddress::findOrFail(1);

      return view('layouts.customer.address.form',compact('customer_address'));

      // return $id;
   }

}
