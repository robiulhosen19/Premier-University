<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'puc',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => md5('admin'),
            'role' => 'Admin',
            'status' => true
        ]);
    }
}
