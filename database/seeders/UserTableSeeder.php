<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('roles_users')->truncate();
        
        $admin = User::create([
            'nom' => 'Rosyne Carter',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'avatars' => 'girl.png',
        ]);
        $Dad = User::create([
            'nom' => 'FOTIE Jurice Fabrice',
            'email' => 'alves@admin.com',
            'password' => Hash::make('password'),
            'avatars' => 'boy.png',
        ]);
        $Mom = User::create([
            'nom' => 'KOPELDA Rosine',
            'email' => 'rosyne@admin.com',
            'password' => Hash::make('password'),
            'avatars' => 'girl.png',
        ]);
        
        $adminRole = Role::where('role', 'admin')->first();
        $DadRole = Role::where('role', 'Dad')->first();
        $MomRole = Role::where('role', 'Mom')->first();

        // $admin->roles()->attach($adminRole);
        // $Dad->roles()->attach($DadRole);
        // $Mom->roles()->attach($MomRole);
    }
}
