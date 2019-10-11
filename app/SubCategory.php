<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }

    public function Products()
    {
        return $this->hasMany('App\Product', 'subcategory_id');
    }
}
