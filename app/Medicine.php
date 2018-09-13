<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['name', 'category_id', 'supplier_id', 'img'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
