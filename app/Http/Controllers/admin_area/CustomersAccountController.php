<?php

namespace App\Http\Controllers\admin_area;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\admin_area\CustomersAccount;
use Illuminate\Http\Request;
use Session;

class CustomersAccountController extends Controller
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
            $customersaccount = CustomersAccount::where('first_name', 'LIKE', "%$keyword%")
				->orWhere('last_name', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('phone', 'LIKE', "%$keyword%")
				->orWhere('address', 'LIKE', "%$keyword%")
				->orWhere('city', 'LIKE', "%$keyword%")
				->orWhere('state', 'LIKE', "%$keyword%")
				->orWhere('postal_code', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $customersaccount = CustomersAccount::paginate($perPage);
        }

        return view('admin_area.customers-account.index', compact('customersaccount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin_area.customers-account.create');
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
        
        CustomersAccount::create($requestData);

        Session::flash('flash_message', 'CustomersAccount added!');

        return redirect('admin_area/customers-account');
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
        $customersaccount = CustomersAccount::findOrFail($id);

        return view('admin_area.customers-account.show', compact('customersaccount'));
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
        $customersaccount = CustomersAccount::findOrFail($id);

        return view('admin_area.customers-account.edit', compact('customersaccount'));
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
        
        $customersaccount = CustomersAccount::findOrFail($id);
        $customersaccount->update($requestData);

        Session::flash('flash_message', 'CustomersAccount updated!');

        return redirect('admin_area/customers-account');
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
        CustomersAccount::destroy($id);

        Session::flash('flash_message', 'CustomersAccount deleted!');

        return redirect('admin_area/customers-account');
    }
}
