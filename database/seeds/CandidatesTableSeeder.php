<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Christian Saravia',
        'email' => 'christian@cs50.harvard.edu',
        'linkedin' => 'https://www.linkedin.com/in/christiansaravia',
        'github' => 'https://github.com/christiansaravia',
        'website' => 'http://christiansaravia.com',
        'role' => 'Software Engineering',
	    ]);

	    DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Luke Jackson',
        'email' => 'luke@cs50.harvard.edu',
        'linkedin' => 'https://www.linkedin.com/in/lukejackson',
        'github' => 'https://github.com/lukejackson',
        'website' => 'http://lukejackson.com',
        'role' => 'Design',
	    ]);

	    DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Ana Smith',
        'email' => 'ana@cs50.harvard.edu',
        'linkedin' => 'https://www.linkedin.com/in/anasmith',
        'github' => 'https://github.com/anasmith',
        'website' => 'http://anasmith.com',
        'role' => 'Marketing',
	    ]);
    }
}
