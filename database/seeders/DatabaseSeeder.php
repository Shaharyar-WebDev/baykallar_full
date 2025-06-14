<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\NavbarSeeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user = User::create([
            'name' => 'Shaharyar',
            'email' => 'shery.codes@gmail.com',
            'password' => '12345678',
        ]);

        $user2 = User::create([
            'name' => 'Shaharyar12',
            'email' => 'ahmedshaharyar00@gmail.com',
            'password' => '12345678',
        ]);

        $user->markEmailAsVerified();
        $user2->markEmailAsVerified();


        $role = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'manager']);
        $permission = Permission::create(['name' => 'administration']);
        $permission2 = Permission::create(['name' => 'accounts']);

        $role->givePermissionTo([$permission, $permission2]);
        $role2->givePermissionTo($permission2);
        $user->assignRole($role);
        $user2->assignRole($role2);
        $this->call([
            NavbarSeeder::class
        ]);
        
    }
}
