<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Створення ролей
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Створення дозволів
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'view dashboard']);

        // Призначення дозволів ролям
        $adminRole->givePermissionTo(['manage users', 'view dashboard']);

        User::factory()->create([
            'name' => 'TestUser',
            'email' => 'test@example.com',
            'password' => 'test1234',
        ]);
    }
}
