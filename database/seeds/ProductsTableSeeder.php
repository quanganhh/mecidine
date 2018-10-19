<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
            [
            'category_id' => 9,
            'name' => ' Sympal',
            'image' => '10.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => date('Y-m-d H-i-s'),
            'updated_at' => null,
            ],
            [
            'category_id' => 9,
            'name' => 'Ilclor Capsule',
            'image' => '10.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => date('Y-m-d H-i-s'),
            'updated_at' => null,
            ],
            [
            'category_id' => 9,
            'name' => 'Rataf',
            'image' => '13.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => date('Y-m-d H-i-s'),
            'updated_at' => null,
            ],
            [
            'category_id' => 9,
            'name' => 'Efferalgan',
            'image' => '24.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => date('Y-m-d H-i-s'),
            'updated_at' => null,
            ],
            
        ]);
    }
}
