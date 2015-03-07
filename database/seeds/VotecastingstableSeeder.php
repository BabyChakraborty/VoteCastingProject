<?php

use Illuminate\Database\Seeder;

class VotecastingstableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('votecastings')->delete();

        $votecastings= array(
            ['id' => 1, 'voter_id' => '005', 'candidate_symbol' => 'laptop', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('votecastings')->insert($votecastings);
    }

}