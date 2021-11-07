<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $admin = User::create([
            'name' => 'Rosyne Carter',
            'email' => 'admin@admin.com',
            
            'password' => Hash::make('password')
        ]);
    }
}
