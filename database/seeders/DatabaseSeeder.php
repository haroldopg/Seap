<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->create([
           'name' => 'Test User',
           'email' => 'test@example.com',
           'cargo' => 'Administrativo',
           'email_verified_at' => '2023-04-09 17:01:08',
           'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
           'remember_token'=> 'OyXAac7KGX',
           'created_at'=> '2023-04-09 17:01:08',
           'updated_at'=>'2023-04-09 17:01:08'

         ]);
    }
}
