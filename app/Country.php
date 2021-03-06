<?php

namespace App;

use \Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  use Translatable;

  public $translatedAttributes = ['name'];
  protected $fillable = ['code'];

}
