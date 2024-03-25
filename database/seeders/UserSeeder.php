<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un usuario Admin
        User::factory()->create([
            'role_id' => Role::where('name', 'Admin')->first()->id
        ]);

        // Crear dos usuarios Consumer
        User::factory()->count(2)->create([
            'role_id' => Role::where('name', 'Consumer')->first()->id
        ]);

        // Crear tres usuarios Producer
        User::factory()->count(3)->create([
            'role_id' => Role::where('name', 'Producer')->first()->id
        ]);
    }
}
