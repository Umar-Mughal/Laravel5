<?php

namespace App\admin_area;

use Illuminate\Database\Eloquent\Model;

class RecordType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'record_types';

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
    protected $fillable = ['name', 'parent_id'];

    
}
