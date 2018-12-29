<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('teams')->insert([
                'name' => 'Team '.$i ,
                'description' => 'Desctiption of Team '.$i ,
                'leader_id' => ($i + 1)
            ]);
        }
    }
}
