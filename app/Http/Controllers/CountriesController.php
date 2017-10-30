<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Session;

class CountriesController extends Controller
{
    public function index()
    {
      // Country::create([
      // 	'name' => [
      // 		'en' => "England",
      // 		'ur' => 'پہلے سے رجسٹرڈ ہیں تو نیچے لاگ اِن کریں',
      //
      // 	]
      // ]);
      $country=Country::find(6);
      // print_r($country->name);
      // echo $country['name']['ur'];
      dd($country);
    }


}
