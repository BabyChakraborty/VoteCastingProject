<?php

use Illuminate\Database\Seeder;

class CandidatestableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('candidates')->delete();

        $candidates= array(
            ['id' => 1, 'candidate_name' => 'Baby', 'candidate_symbol' => 'laptop', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'candidate_name' => 'lict', 'candidate_symbol' => 'mirror', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        // Uncomment the below to run the seeder
        DB::table('candidates')->insert($candidates);
    }

}