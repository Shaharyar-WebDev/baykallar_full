<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user = User::create([
            'name' => 'Shaharyar',
            'email' => 'shery.codes@gmail.com',
            'password' => '12345678',
        ]);

        $user->markEmailAsVerified();

        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'administration']);
        $role->givePermissionTo($permission);
        $user->assignRole($role);
        
    }
}
