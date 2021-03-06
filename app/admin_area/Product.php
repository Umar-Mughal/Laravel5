<?php

namespace App\admin_area;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    use \Dimsav\Translatable\Translatable;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'price', 'quantity', 'category_id', 'image'];

    public $translatedAttributes=['name','description'];


}
