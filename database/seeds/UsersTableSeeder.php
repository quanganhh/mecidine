<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Nguyễn Quang Anh',
            'username' => 'SuperAdmin',
            'email' => 'anhnqqq@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => '0966985707',
            'address' => 'Hà Nội',
            'level' => 0,
            'status' => 1,
            'created_at' => date('Y-m-d H-i-s'),
            'updated_at' => null,

        ]);
    }
}
