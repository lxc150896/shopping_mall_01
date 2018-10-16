<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    public function bill()
    {
        return $this->hasMany('App\Models\Bill', 'customer_id', 'id');
    }
}
