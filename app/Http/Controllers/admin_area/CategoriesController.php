<?php

namespace App\Http\Controllers\admin_area;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\admin_area\Category;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
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
            $categories = Category::where('parent_id', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $categories = Category::paginate($perPage);
        }

        return view('admin_area.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin_area.categories.create',compact('categories'));
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
        
        Category::create($requestData);

        Session::flash('flash_message', 'Category added!');

        return redirect('admin_area/categories');

        // dd($requestData);
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
        $category = Category::findOrFail($id);

        return view('admin_area.categories.show', compact('category'));
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
        $category = Category::findOrFail($id);
        $categories=Category::all();

        return view('admin_area.categories.edit', compact('category','categories'));
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
        
        $category = Category::findOrFail($id);
        $category->update($requestData);

        Session::flash('flash_message', 'Category updated!');

        return redirect('admin_area/categories');
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
        Category::destroy($id);

        Session::flash('flash_message', 'Category deleted!');

        return redirect('admin_area/categories');
    }
}
