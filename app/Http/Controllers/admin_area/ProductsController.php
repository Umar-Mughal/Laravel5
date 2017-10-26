<?php

namespace App\Http\Controllers\admin_area;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\admin_area\Category;
use App\admin_area\Product;
use Illuminate\Http\Request;
use App\Helpers\FileHelper;//custom helper to work on file uploading

use Image;
use Illuminate\Support\Facades\Storage;

use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $products = Product::where('name', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('code', 'LIKE', "%$keyword%")
				->orWhere('price', 'LIKE', "%$keyword%")
				->orWhere('quantity', 'LIKE', "%$keyword%")
				->orWhere('category_id', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $products = Product::paginate($perPage);
        }

        return view('admin_area.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {  
        $categories=Category::all();
        return view('admin_area.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        


        $requestData = $request->all();

        $requestData['image']=FileHelper::addFile($request,'image'); //storing image to server 
        
        Product::create($requestData);

        Session::flash('flash_message', 'Product added!');

        return redirect('admin_area/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin_area.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin_area.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $product = Product::findOrFail($id);
        $product->update($requestData);

        Session::flash('flash_message', 'Product updated!');

        return redirect('admin_area/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        Session::flash('flash_message', 'Product deleted!');

        return redirect('admin_area/products');
    }
}
