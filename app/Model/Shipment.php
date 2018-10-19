<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'id',
        'type',
        'cost',
        'status',
        'created_at',
        'update_at',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
