<?php

use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            DB::table('sponsors')->insert([
                'name' => 'Eveneer',
                'logo' => '/frontend/img/emoji.jpg',
            ]);
        }
    }
}
