<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();



        $this->call('VoterstableSeeder');
        $this->call('CandidatestableSeeder');
        $this->call('VotecastingstableSeeder');
	}

}
