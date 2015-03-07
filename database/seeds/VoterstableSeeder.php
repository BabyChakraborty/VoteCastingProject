<?php

use Illuminate\Database\Seeder;

class VoterstableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('voters')->delete();

        $voters= array(
            ['id' => 1, 'voter_name' => 'Baby', 'voter_id' => '001', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'voter_name' => 'Project 2', 'voter_id' => '002', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        // Uncomment the below to run the seeder
        DB::table('voters')->insert($voters);
    }

}