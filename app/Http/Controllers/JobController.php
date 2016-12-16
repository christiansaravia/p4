<?php

namespace Matchio\Http\Controllers;

use Illuminate\Http\Request;

use Matchio\Http\Requests;
use Matchio\Job;
use Matchio\Company;
use Matchio\User;
use Session;
use Auth;

class JobController extends Controller
{
    # GET
    public function index()
    {
        # Query DB
        $jobs = Job::all();

        # Display results
        return view('job.index')->with('jobs', $jobs);
    }

    # GET
    public function create()
    {
        # Company
        $companies_for_dropdown = Company::companiesForDropdown();

        # Display results
        return view('job.create')->with('companies_for_dropdown', $companies_for_dropdown);
    }

    # POST
    public function store(Request $request)
    {
        # Validation
        $this->validate($request, [
            'position' => 'required',
            'type' => 'required',
            'salary' => 'required|numeric',
        ]);

        # Enter form data into the database
        $job = new Job();
        $job->position = $request->position;
        $job->type = $request->type;
        $job->salary = $request->salary;
        $job->company_id = $request->company_id;
        $job->save();

        # Print the results
        return redirect('/jobs');
    }

    # GET
    public function edit($id)
    {
        # find job
        $job = Job::find($id);

        $companies_for_dropdown = Company::companiesForDropdown();

        # Make sure $companies_for_dropdown is passed to the view
        return view('job.edit')->with([
            'job' => $job,
            'companies_for_dropdown' => $companies_for_dropdown
        ]);
    }

    

    public function update(Request $request, $id)
    {
        # Validation
        $this->validate($request, [
            'position' => 'required',
            'type' => 'required',
            'salary' => 'required|numeric',
        ]);

        # Enter form data into the database
        $job = Job::find($request->id);
        $job->position = $request->position;
        $job->type = $request->type;
        $job->salary = $request->salary;
        $job->company_id = $request->company_id;
        $job->save();

        # Print the results
        return redirect('/jobs');
    }

    # GET
    public function delete($id) {

        # Find candidate
        $job = Job::find($id);

        return view('job.delete')->with('job', $job);
    }

    # POST
    public function destroy($id)
    {
        # Find job
        $job = Job::find($id);

        if(is_null($job)) {
            Session::flash('message','Job not found.');
            return redirect('/jobs');
        }

        # Then delete the candidate
        $job->delete();

        # Finish
        Session::flash('flash_message', $job->name.' was deleted.');
        return redirect('/jobs');
    }
}
