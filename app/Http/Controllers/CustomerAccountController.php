<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerAddress;
use App\Helpers\Constant;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class CustomerAccountController extends Controller
{
   public function index()
   {
   	  	$cart_items=Cart::content();

   	  	$billing_address=CustomerAddress::where([
            ['customer_id', '=', Auth::id() ],
            ['address_type', '=', Config::get('constants.ADDRESS.BILLING_ADDRESS')],
         ])->take(1)->get();   //Getting billing addres 

         $shipping_address=CustomerAddress::where([
   	  		['customer_id', '=', Auth::id() ],
   	  		['address_type', '=', Config::get('constants.ADDRESS.SHIPPING_ADDRESS')],
   	  	])->take(1)->get();   //Getting shipping addres 

   	   
         $cstmr_acnt_info=Customer::where('id',Auth::id())->get();

		return view('customer_account',compact('cart_items',
			'billing_address','shipping_address','cstmr_acnt_info'));
   }

   public function create_address(Request $request)
   {    

         $address_type=$request->address_type;
		   return view('layouts.customer.address.form',compact('address_type'));
   }


   public function checkout()
   {
   	  	$cart_items=Cart::content();
		return view('checkout',compact('cart_items'));
   }

   public function store_address(Request $request)
   {

         $requestData=$request->all();
         $requestData['customer_id']=Auth::id();
         $requestData['address_type']=$request->id;
         CustomerAddress::create($requestData);

   }

   public function edit_address($address_type)
   {
         $customer_address=CustomerAddress::where([
            ['customer_id', '=', Auth::id() ],
            ['address_type', '=', $address_type],
         ])->first();

         $address_type=$address_type;

      return view('layouts.customer.address.form',compact('customer_address','address_type'));
      
   }

}
