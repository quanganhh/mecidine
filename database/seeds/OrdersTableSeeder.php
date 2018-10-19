<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('orders')->insert([
         	
            'user_id' => 1,
            'shipment_id' => 1,
            'payment_id' => 1,
            'order_status_id' => 1,
            'total_price' => 200000,
            'address' => 'Hà Nội',
            'ship_date' => date('Y-m-d H-i-s'),

        ]);
    }
}
