<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class OrderStatus extends Model
{
    protected $table = 'order_status';

    protected $fillable = [
        'id',
        'description',
        'created_at',
        'update_at',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
