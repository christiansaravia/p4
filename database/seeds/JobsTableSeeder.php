<?php

use Illuminate\Database\Seeder;
use Matchio\Company;

class JobsTableSeeder extends Seeder
{
    public function run()
    {
        $company_id = Company::where('company_name','=','Docker')->pluck('id')->first();

        DB::table('jobs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_id' => $company_id,
        'position' => 'Software Engineer',
        'type' => 'Full-Time',
        'salary' => 100000,
	    ]);

        $company_id = Company::where('company_name','=','Gimlet Media')->pluck('id')->first();

	    DB::table('jobs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_id' => $company_id,
        'position' => 'UI Designer',
        'type' => 'Part-Time',
        'salary' => 80000,
	    ]);

        $company_id = Company::where('company_name','=','Kickstarter')->pluck('id')->first();

	    DB::table('jobs')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_id' => $company_id,
        'position' => 'AI Engineer',
        'type' => 'Full-Time',
        'salary' => 130000,
	    ]);
    }
}
