<?php

namespace App\Http\Controllers;

use App\User;
use App\admin_area\Slider;
use App\admin_area\Page;
use App\admin_area\Category;
use App\admin_area\Product;
use Cart;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
	{

		$categories = Category::where('parent_id',0)->take(4)->get();

		$cart_items=Cart::content();

		return view('home',compact('categories','cart_items'));
	}

	public function single_product($id)
	{

		$product=Product::findOrFail($id);
		$cart_items=Cart::content();

		return view('single_product',compact('product','cart_items'));
	}
 
}
