<?php

namespace Matchio\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use Matchio\Candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all(); # Query DB
        $first = $candidates->first(); # Query Collection (avoid multiple queries to DB)

        return view('candidate.index')  
            ->with('candidates', $candidates)
            ->with('first', $first);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Validate the request data
        $this->validate($request, [
            'name' => 'required|min:3|alpha_num',
            'email'=> 'required|email',
            'linkedin' => 'required|active_url',
            'portfolio' => 'active_url',
            'website' => 'active_url',
            'role' => 'required',
            'agreement' => '',
        ]);

        # Get data from the form
        #$name = $request->input('name');
        #$email = $request->input('email');

        # Code here to enter the candidate into the database
        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->linkedin = $request->linkedin;
        $candidate->github = $request->github;
        $candidate->website = $request->website;
        $candidate->role = $request->role;
        $candidate->agreement = $request->agreement;
        $candidate->save();

        # Code here that has some logic, such as generating lorem ipsum text

        Session::flash('flash_message','Your candidate profile was added');

        # Print the results
        return \Redirect::to('/candidates');
        #return 'Process adding new candidate: '.$name.', '.$email;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        return view('candidate.show')->with('username', $username);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        return view('candidate.edit')->with('username', $username);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        //
    }
}
