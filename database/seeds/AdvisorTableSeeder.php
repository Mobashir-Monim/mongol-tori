<?php

use Illuminate\Database\Seeder;

class AdvisorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advisors')->insert([
            'name' => 'Dr. Md. Khalilur Rahman',
            'photo' => '/frontend/img/Dr. Md. Khalilur Rhaman.jpg',
            'role' => 'Faculty Adviser',
            'department' => 'CSE',
        ]);
        
        DB::table('advisors')->insert([
            'name' => 'Md. Saiful Islam',
            'photo' => '/frontend/img/Md. Saiful Islam.jpg',
            'role' => 'Faculty Adviser',
            'department' => 'CSE',
        ]);

        DB::table('advisors')->insert([
            'name' => 'Abdullah',
            'photo' => '/frontend/img/Abdullah.jpg',
            'role' => 'Faculty Adviser',
            'department' => 'CSE',
        ]);
    }
}
