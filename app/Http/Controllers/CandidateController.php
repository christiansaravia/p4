<?php

namespace Matchio\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use App\Book;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidate.index');
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
            'linkedin' => 'active_url',
            'portfolio' => 'active_url',
            'role' => 'required',
            'projects' => 'required',
            'story' => 'required',
            'agreement' => 'required',
        ]);

        # Get data from the form
        $name = $request->input('name');
        $email = $request->input('email');

        # Code here to enter the candidate into the database


        # Code here that has some logic, such as generating lorem ipsum text

        # Print the results
        # return \Redirect::to('/books/create');
        return 'Process adding new candidate: '.$name.', '.$email;
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
