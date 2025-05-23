<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    Role::create(['name' => 'admin']);
    Role::create(['name' => 'user']);

    $admin = User::factory()->create([
        'name' => 'Admin',
        'email' => 'dev@clark.idv.tw',
        'password' => bcrypt('password'),
    ]);

    $admin->assignRole('admin');
    }
}
