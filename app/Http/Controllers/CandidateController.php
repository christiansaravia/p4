<?php

namespace Matchio\Http\Controllers;

use Illuminate\Http\Request;

use Matchio\Http\Requests;
use Matchio\Candidate;
use Matchio\User;
use Session;
use Auth;

class CandidateController extends Controller
{
    # GET
    public function index()
    {
        # Query DB
        $candidates = Candidate::all();

        # Display results
        return view('candidate.index')->with('candidates', $candidates);
    }

    # GET
    public function create()
    {
        # Display results
        return view('candidate.create');
    }

    # POST
    public function store(Request $request)
    {
        # Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'linkedin' => 'required|url',
            'github' => 'url',
            'project' => 'url',
        ]);

        # Enter form data into the database
        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->role = $request->role;
        $candidate->linkedin = $request->linkedin;
        $candidate->github = $request->github;
        $candidate->behance = $request->behance;
        $candidate->project = $request->project;
        $candidate->save();
    
        # Display results
        return redirect('/candidates');
    }

    # GET
    public function show($id)
    {
        # find candidate
        $candidate = Candidate::find($id);

        if(is_null($candidate)) {
            Session::flash('message','Candidate not found');
            return redirect('/candidates');
        }

        return view('candidate.show')->with('candidate', $candidate);
    }

    # GET
    public function edit($id)
    {
        # find candidate
        $candidate = Candidate::find($id);
        return view('candidate.edit')->with('candidate', $candidate);
    }

    # POST
    public function update(Request $request, $id)
    {
        # Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'linkedin' => 'required|url',
            'github' => 'url',
            'project' => 'url',
        ]);

        # Enter form data into the database
        $candidate = Candidate::find($request->id);
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->role = $request->role;
        $candidate->linkedin = $request->linkedin;
        $candidate->github = $request->github;
        $candidate->behance = $request->behance;
        $candidate->project = $request->project;
        $candidate->save();
    
        # Display results
        return redirect('/candidates');
    }


    # GET
    public function delete($id) {

        # Find candidate
        $candidate = Candidate::find($id);

        return view('candidate.delete')->with('candidate', $candidate);
    }

    # POST
    public function destroy($id)
    {
        # Find candidate
        $candidate = Candidate::find($id);

        if(is_null($candidate)) {
            Session::flash('message','Candidate not found.');
            return redirect('/candidates');
        }

        # Then delete the candidate
        $candidate->delete();

        # Finish
        Session::flash('flash_message', $candidate->name.' was deleted.');
        return redirect('/candidates');
    }
}
