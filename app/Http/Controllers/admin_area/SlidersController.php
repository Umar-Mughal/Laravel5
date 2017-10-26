<?php

namespace App\Http\Controllers\admin_area;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\admin_area\Slider;
use Illuminate\Http\Request;
use Session;

class SlidersController extends Controller
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
            $sliders = Slider::where('heading', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $sliders = Slider::paginate($perPage);
        }

        return view('admin_area.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin_area.sliders.create');
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

        if($request->hasFile('image'))
        {
            $image_name=$request->image->getClientOriginalName();
            $request->image->storeAs('public/images',$image_name);
            $requestData['image']=$image_name;
        }

        Slider::create($requestData);

        Session::flash('flash_message', 'Slider added!');

        return redirect('admin_area/sliders');
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
        $slider = Slider::findOrFail($id);

        return view('admin_area.sliders.show', compact('slider'));
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
        $slider = Slider::findOrFail($id);

        return view('admin_area.sliders.edit', compact('slider'));
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
        
        $slider = Slider::findOrFail($id);
        $slider->update($requestData);

        Session::flash('flash_message', 'Slider updated!');

        return redirect('admin_area/sliders');
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
        Slider::destroy($id);

        Session::flash('flash_message', 'Slider deleted!');

        return redirect('admin_area/sliders');
    }
}
