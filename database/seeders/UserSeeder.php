<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolAdministrator = Rol::where('name', 'Administrator')->first();

        User::create([
            'name' => 'Luis Miguel', 
            'email' => 'f@f', 
            'password' => Hash::make('12345'),
            'rol_id' => $rolAdministrator->id
        ]);

        User::factory(20)->create();
    }
}
