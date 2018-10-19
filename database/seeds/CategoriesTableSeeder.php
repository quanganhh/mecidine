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
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc giảm đau, hạ sốt',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc ngoài da',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc đường tiêu hóa',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => null
            ],
            [
                'category_name' => 'Thuốc đường hô hấp',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => null
            ]
        ]);
    }
}
