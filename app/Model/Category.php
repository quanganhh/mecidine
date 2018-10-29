<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Category extends Model
{
    protected $fillable = [
        'id',
        'category_name',
        'created_at',
        'update_at',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
