<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class Payment extends Model
{
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'status',
        'update_at',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
