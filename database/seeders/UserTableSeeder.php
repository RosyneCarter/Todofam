<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('role_user')->truncate();
        
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
        $User = User::create([
            'nom' => 'FOTIE Lune',
            'email' => 'lune@fotie.com',
            'password' => Hash::make('password'),
            'avatars' => 'Rosie.jpg',
        ]);
        
        $adminRole = Role::where('role', 'Parent')->first();
        $DadRole = Role::where('role', 'Parent')->first();
        $MomRole = Role::where('role', 'Parent')->first();
        $UserRole = Role::where('role', 'Enfant')->first();

        $admin->roles()->attach($adminRole);
        $Dad->roles()->attach($DadRole);
        $Mom->roles()->attach($MomRole);
        $User->roles()->attach($UserRole);
    }
}
