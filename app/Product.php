<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','slug','details','price','shipping_cost','description','category_id','brand_id','image_path'];
}
