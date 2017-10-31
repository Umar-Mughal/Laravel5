<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Session;
use DB;
use Dimsav\Translatable\Translatable;

class CountriesController extends Controller
{

  use Translatable;

    public function index()
    {
      // Country::create([
      // 	'code' => 'pk'
      // ]);

      $country=Country::where('code','pk')->get();
      $country->translate('en')->name='abc';
      $country->save();
      dd($country);
    }


}
