<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function getProductImageAttribute()
    {
        return asset('img/' . $this->image);
    }

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory');
    }

    public function category($id)
    {
        return Category::find($id);
    }
}
