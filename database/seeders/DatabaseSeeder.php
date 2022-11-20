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
            'name' => 'Danjay',
            'email' => 'danjay@example.com',
            'password' => bcrypt(value:'danjay123456')
        ]);


        // \App\Models\User::factory(10)->create();

    }
}
