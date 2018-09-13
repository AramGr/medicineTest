<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function medicine()
    {
        return $this->hasMany('App\Medicine', 'supplier_id', 'id');
    }
}
