<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customer_addresses';

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
    protected $fillable = ['customer_id', 'first_name', 'last_name', 'phone', 'email', 'address', 'city', 'state', 'postal_code', 'address_type'];

    
}
