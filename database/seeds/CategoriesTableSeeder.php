<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            [
                'category_name' => 'Thuốc cấp cứu, giải độc',
                'image'         => '10.png',
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc giảm đau, hạ sốt',
                'image'         => '10.png',
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc ngoài da',
                'image'         => '10.png',
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc đường tiêu hóa',
                'image'         => '10.png',
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc đường hô hấp',
                'image'         => '10.png',
                'created_at' => null,
                'updated_at' => null
            ]
        ]);
    }
}
