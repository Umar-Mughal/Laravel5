<?php

namespace App\admin_area;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes=['name'];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

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
    protected $fillable = ['parent_id'];


    // public function childs(){
    //     return $this->hasMany('App\admin_area\Category','parent_id','id');
    // }

    public function parent() {
    return $this->belongsTo('App\admin_area\Category', 'parent_id','id'); //get parent category
    }

    public function children() {
    return $this->hasMany('App\admin_area\Category', 'parent_id','id'); //get all subs. NOT RECURSIVE
    }

    public function products(){
        return $this->hasMany('App\admin_area\Product');
    }


}
