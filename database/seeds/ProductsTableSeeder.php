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
            'category_id' => 1,
            'name' => 'Alphachymotrypsin',
            'image' => '10.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],
            [
            'category_id' =>1,
            'name' => 'Alphausar',
            'image' => '10.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],
            [
            'category_id' => 1,
            'name' => 'ALSIFUL',
            'image' => '13.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],
            [
            'category_id' => 1,
            'name' => 'ALSTUZON',
            'image' => '24.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],

            [
            'category_id' => 5,
            'name' => 'Althax',
            'image' => '24.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],

            [
            'category_id' => 5,
            'name' => 'AMBIXOL 15 mg/5 ml',
            'image' => '24.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],

            [
            'category_id' => 5,
            'name' => 'AMIKACIN',
            'image' => '24.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],

            [
            'category_id' => 5,
            'name' => 'Amino XL',
            'image' => '24.png',
            'unit_price' => 120000,
            'promotion_price' => 110000,
            'quantity' => 10,
            'short_description' => 'Adrenalin',
            'full_description' => 'tiêm, ống 1mg/ml',
            'hot' => 0,
            'status' => 1,
            'created_at' => null,
            'updated_at' => null,
            ],

        ]);
    }
}
