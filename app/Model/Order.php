<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\OrderProduct;

class Order extends Model
{
    protected $fillable = [
        'address',
        'user_id',
        'ship_date',
        'shipment_id',
        'payment_id',
        'order_status_id',
        'total_price',
        'update_at',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

    public function order_status()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
