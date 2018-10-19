<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'unit_price',
        'promotion_price',
        'quantity',
        'shortdiscription',
        'full_discription',
        'hot',
        'status',
    ];
    
    public function categories()
    { 
        return $this->belongsTo(Category::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
