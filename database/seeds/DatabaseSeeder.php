<?php

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
        $this->call([
            TeamsTableSeeder::class,
            TeamMembersTableSeeder::class,
            UserTableSeeder::class,
            WebContentTableSeeder::class,
            AdvisorTableSeeder::class
        ]);
    }
}
