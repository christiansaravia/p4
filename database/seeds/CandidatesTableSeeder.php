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
        'role' => 'Software Engineering',
        'linkedin' => 'https://linkedin.com/in/christiansaravia',
        'github' => 'https://github.com/christiansaravia',
        'project' => 'http://christiansaravia.com',
	    ]);    

	    DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Tom Smith',
        'email' => 'tom@cs50.harvard.edu',
        'role' => 'Design',
        'linkedin' => 'https://linkedin.com/in/tomsmith',
        'github' => 'https://github.com/tomsmith',
	    ]);  

	    DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Ana Kim',
        'email' => 'ana@harvard.edu',
        'role' => 'Product Management',
        'linkedin' => 'https://linkedin.com/in/anakim',
        'project' => 'http://anakim.com',
	    ]); 

        DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Andrew Rarcher',
        'email' => 'andrew@harvard.edu',
        'role' => 'Design',
        'linkedin' => 'https://linkedin.com/in/andrew',
        'behance' => 'https://behance.net/andrewtarcher',
        ]); 
    }
}
