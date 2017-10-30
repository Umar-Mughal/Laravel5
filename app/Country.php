<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Multilingual\Translatable;

class Country extends Model
{
  protected $fillable=['name'];
  protected $table = 'countries';
  public $translatable = ['name'];
  public $casts = ['name' => 'array'];
}
