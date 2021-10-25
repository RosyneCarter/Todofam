<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::truncate();


        $admin = User::create([
            'name' => 'Rosyne Carter',
            'email' => 'admin@admin.com',
            
            'password' => Hash::make('password')
        ]);
    }
}
