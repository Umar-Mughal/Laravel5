<?php

namespace App\Http\Controllers\admin_area;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{


    public function index(){
    	return view('admin_area.home');
    }


}
