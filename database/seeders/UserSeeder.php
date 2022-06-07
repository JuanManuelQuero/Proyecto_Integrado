<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@correo.es',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'usuario',
            'email' => 'usuario@correo.es',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678')
        ])->assignRole('Normal');


        User::factory(20)->create();
    }
}
