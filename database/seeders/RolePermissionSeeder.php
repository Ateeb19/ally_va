<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super_admin = Role::create(['name' => 'super_admin']);
        $user = Role::create(['name' => 'user']);

        // Super Admin User
        $superAdminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@test.com',
            'phone' => '123456',
            'password' => Hash::make('test@123'), // Always hash passwords
        ]);
        $superAdminUser->assignRole('super_admin');


        // Normal User
        $normalUser = User::create([
            'name' => 'Normal User',
            'email' => 'user@test.com',
            'phone' => '123456',
            'password' => Hash::make('user@123'),
        ]);
        $normalUser->assignRole('user');
    }
}
