<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Stephen Admin',
            'email' => 'asarestephen.asare@gmail.com',
            'password' => bcrypt('Sickle_Gene_99##'),
        ]);

        User::create([
            'name' => 'Awo Twumasi',
            'email' => 'awotwumasi@yahoo.com',
            'password' => bcrypt('Sickle_Gene_99##'),
        ]);

        echo "Developer and Owner Accounts Seeded Successfully\n";
    }
}
