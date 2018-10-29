<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Vote extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
