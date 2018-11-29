<?php

use Illuminate\Database\Seeder;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('team_members')->insert([
                'name' => 'Name of Member '.$i ,
                'email' => 'emailaddress'.$i.'@domain,com',
                'phone' => '+8801234567890',
                'department' => 'CSE',
                'team' => 'Some team',
                'photo' => '/frontend/img/Abdullah.jpg',
            ]);
        }
    }
}
