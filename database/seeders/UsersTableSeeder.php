<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
            'username' => 'admin',
            'first_name' => 'Ruhul',
            'last_name' => 'Amin',
            'email' => 'abc@gmail.com',
            'address' => 'test',
            'division' => 'test',
            'image' => null,
            'password' => md5('admin'),
            'phone' => '00000000000',
            'status' => 1,
            'country'=>'test',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
