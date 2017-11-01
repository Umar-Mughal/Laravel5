<?php

namespace App\admin_area;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    //
    protected $fillable = ['name','description'];
    public $timestamps=false;
}
