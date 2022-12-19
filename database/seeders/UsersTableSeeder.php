<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert(
            // [
            //     'name' => 'Administrador',
            //     'email' => 'andrebraga92@hotmail.com',
            //     'email_verified_at' => now(),
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => 'stringteste',
            // ],
            // [
            //     'name' => fake()->name(),
            //     'email' => fake()->unique()->safeEmail(),
            //     'email_verified_at' => now(),
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            // ]
        // );

        \App\Models\User::factory(50)->create()->each(function($user){
            $user->store()->save(\App\Models\Store::factory()->make());
        });
    }
}
