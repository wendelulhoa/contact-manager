<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Check if user exists
        if(User::where('email', 'alfasoft@alfasoft.com')->exists()) {
            return;
        }

        // New User
        User::create([
            'name' => 'alfasoft',
            'email' => 'alfasoft@alfasoft.com',
            'password' => Hash::make('12345678'), 
        ]);

        // Instance of Faker
        $faker = Faker::create();

        // Create 30 contacts
        for ($i = 0; $i < 30; $i++) {
            Contact::create([
                'name' => $faker->name,
                'phone' => $faker->numerify('9########'),
                'email' => $faker->unique()->safeEmail,
                'notes' => $faker->sentence,
                'user_id' => 1,
            ]);
        }
    }
}
