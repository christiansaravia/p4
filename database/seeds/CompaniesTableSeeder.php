<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => '9gag',
        'description' => 'The world’s most popular humor site.',
        'headquarters' => 'Mountain View, CA',
        'website' => 'https://9gag.com',
	    ]);

	    DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'AeroFS',
        'description' => 'Sync all your stuff, with or without the cloud.',
        'headquarters' => 'Palo Alto, CA',
        'website' => 'https://aerofs.com',
	    ]);

        DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'Automattic',
        'description' => 'Passionate about making the web a better place.',
        'headquarters' => 'San Francisco, CA',
        'website' => 'https://automattic.com',
        ]);

        DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'Bellhops',
        'description' => 'Trusted hands to help you move.',
        'headquarters' => 'Chattanooga, TN',
        'website' => 'https://getbellhops.com',
        ]);

        DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'Blue Bottle Coffee',
        'description' => 'The craft of coffee.',
        'headquarters' => 'Oakland, CA',
        'website' => 'http://bluebottlecoffee.com',
        ]);

        DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'Docker',
        'description' => 'Build once, run anywhere. Configure once, run anything.',
        'headquarters' => 'San Francisco, CA',
        'website' => 'http://docker.com',
        ]);

        DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'Gimlet Media',
        'description' => 'High-quality, narrative podcasts.',
        'headquarters' => 'New York, NY',
        'website' => 'http://gimletmedia.com',
        ]);

        DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'Kickstarter',
        'description' => 'The world’s largest funding platform for creative projects.',
        'headquarters' => 'New York, NY',
        'website' => 'http://kickstarter.com',
        ]);

	    DB::table('companies')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'company_name' => 'Vidme',
        'description' => 'The fastest way to share video.',
        'headquarters' => 'Los Angeles, CA',
        'website' => 'https://vid.me',
	    ]);
    }
}
