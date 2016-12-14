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
        'portfolio' => 'https://github.com/christiansaravia',
        'role' => 'Software Engineering',
        'projects' => 'Donec nisi fames ullamcorper inceptos commodo etiam sodales orci curae, litora cubilia bibendum curabitur non conubia senectus pretium viverra, vulputate vel massa porttitor habitant cursus imperdiet dui. Aliquet sit feugiat cursus ipsum ligula nulla aliquam, lobortis facilisis mattis pretium tortor hac, consequat dui ipsum justo senectus fusce. Elementum laoreet inceptos aliquam scelerisque sapien habitasse convallis rhoncus velit ullamcorper tristique blandit, dolor nunc donec nulla pretium quis rhoncus sagittis eget urna. Cras nibh sapien quis suscipit risus, a urna velit nam diam dictumst, fames elementum hendrerit vestibulum. Id lacus vitae vel duis pharetra proin tempus, cursus tristique ipsum auctor massa sit, ut placerat elementum sem dui enim. Id risus facilisis commodo tempor nisi sodales conubia, nulla in velit blandit scelerisque ut integer, risus accumsan nisi porttitor turpis ut.',
        'story' => 'Donec nisi fames ullamcorper inceptos commodo etiam sodales orci curae, litora cubilia bibendum curabitur non conubia senectus pretium viverra, vulputate vel massa porttitor habitant cursus imperdiet dui. Aliquet sit feugiat cursus ipsum ligula nulla aliquam, lobortis facilisis mattis pretium tortor hac, consequat dui ipsum justo senectus fusce. Elementum laoreet inceptos aliquam scelerisque sapien habitasse convallis rhoncus velit ullamcorper tristique blandit, dolor nunc donec nulla pretium quis rhoncus sagittis eget urna. Cras nibh sapien quis suscipit risus, a urna velit nam diam dictumst, fames elementum hendrerit vestibulum. Id lacus vitae vel duis pharetra proin tempus, cursus tristique ipsum auctor massa sit, ut placerat elementum sem dui enim. Id risus facilisis commodo tempor nisi sodales conubia, nulla in velit blandit scelerisque ut integer, risus accumsan nisi porttitor turpis ut.',
	    ]);

	    DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Luke Jackson',
        'email' => 'luke@cs50.harvard.edu',
        'linkedin' => 'https://www.linkedin.com/in/lukejackson',
        'portfolio' => 'https://github.com/lukejackson',
        'role' => 'Design',
        'projects' => 'Donec nisi fames ullamcorper inceptos commodo etiam sodales orci curae, litora cubilia bibendum curabitur non conubia senectus pretium viverra, vulputate vel massa porttitor habitant cursus imperdiet dui. Aliquet sit feugiat cursus ipsum ligula nulla aliquam, lobortis facilisis mattis pretium tortor hac, consequat dui ipsum justo senectus fusce. Elementum laoreet inceptos aliquam scelerisque sapien habitasse convallis rhoncus velit ullamcorper tristique blandit, dolor nunc donec nulla pretium quis rhoncus sagittis eget urna. Cras nibh sapien quis suscipit risus, a urna velit nam diam dictumst, fames elementum hendrerit vestibulum. Id lacus vitae vel duis pharetra proin tempus, cursus tristique ipsum auctor massa sit, ut placerat elementum sem dui enim. Id risus facilisis commodo tempor nisi sodales conubia, nulla in velit blandit scelerisque ut integer, risus accumsan nisi porttitor turpis ut.',
        'story' => 'Donec nisi fames ullamcorper inceptos commodo etiam sodales orci curae, litora cubilia bibendum curabitur non conubia senectus pretium viverra, vulputate vel massa porttitor habitant cursus imperdiet dui. Aliquet sit feugiat cursus ipsum ligula nulla aliquam, lobortis facilisis mattis pretium tortor hac, consequat dui ipsum justo senectus fusce. Elementum laoreet inceptos aliquam scelerisque sapien habitasse convallis rhoncus velit ullamcorper tristique blandit, dolor nunc donec nulla pretium quis rhoncus sagittis eget urna. Cras nibh sapien quis suscipit risus, a urna velit nam diam dictumst, fames elementum hendrerit vestibulum. Id lacus vitae vel duis pharetra proin tempus, cursus tristique ipsum auctor massa sit, ut placerat elementum sem dui enim. Id risus facilisis commodo tempor nisi sodales conubia, nulla in velit blandit scelerisque ut integer, risus accumsan nisi porttitor turpis ut.',
	    ]);

	    DB::table('candidates')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Ana Smith',
        'email' => 'ana@cs50.harvard.edu',
        'linkedin' => 'https://www.linkedin.com/in/anasmith',
        'portfolio' => 'https://github.com/anasmith',
        'role' => 'Marketing',
        'projects' => 'Donec nisi fames ullamcorper inceptos commodo etiam sodales orci curae, litora cubilia bibendum curabitur non conubia senectus pretium viverra, vulputate vel massa porttitor habitant cursus imperdiet dui. Aliquet sit feugiat cursus ipsum ligula nulla aliquam, lobortis facilisis mattis pretium tortor hac, consequat dui ipsum justo senectus fusce. Elementum laoreet inceptos aliquam scelerisque sapien habitasse convallis rhoncus velit ullamcorper tristique blandit, dolor nunc donec nulla pretium quis rhoncus sagittis eget urna. Cras nibh sapien quis suscipit risus, a urna velit nam diam dictumst, fames elementum hendrerit vestibulum. Id lacus vitae vel duis pharetra proin tempus, cursus tristique ipsum auctor massa sit, ut placerat elementum sem dui enim. Id risus facilisis commodo tempor nisi sodales conubia, nulla in velit blandit scelerisque ut integer, risus accumsan nisi porttitor turpis ut.',
        'story' => 'Donec nisi fames ullamcorper inceptos commodo etiam sodales orci curae, litora cubilia bibendum curabitur non conubia senectus pretium viverra, vulputate vel massa porttitor habitant cursus imperdiet dui. Aliquet sit feugiat cursus ipsum ligula nulla aliquam, lobortis facilisis mattis pretium tortor hac, consequat dui ipsum justo senectus fusce. Elementum laoreet inceptos aliquam scelerisque sapien habitasse convallis rhoncus velit ullamcorper tristique blandit, dolor nunc donec nulla pretium quis rhoncus sagittis eget urna. Cras nibh sapien quis suscipit risus, a urna velit nam diam dictumst, fames elementum hendrerit vestibulum. Id lacus vitae vel duis pharetra proin tempus, cursus tristique ipsum auctor massa sit, ut placerat elementum sem dui enim. Id risus facilisis commodo tempor nisi sodales conubia, nulla in velit blandit scelerisque ut integer, risus accumsan nisi porttitor turpis ut.',
	    ]);
    }
}
