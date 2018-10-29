<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
class OrderProduct extends Model
{
    protected $table = 'order_product';

    public function products()
    {
    	return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function orders()
    {
    	return $this->hasMany(Order::class, 'id', 'order_id');
    }

}
