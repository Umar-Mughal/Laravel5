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

      $data = [
  'code' => 'gr',
  'en'  => ['name' => 'Greece'],
  'fr'  => ['name' => 'Grèce'],
];
$greece = Country::create($data);

echo $greece->translate('fr')->name; // Grèce

      // $country=Country::where('code','pk')->get();
      // $country->translate('en')->name='abc';
      // $country->save();
      // dd($country);
    }


}
