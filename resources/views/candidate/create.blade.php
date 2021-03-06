@extends('layouts.master')

@section('navbar')
    <li class="active"><a href="/candidates">Candidates <span class="sr-only">(current)</span></a></li>
    <li><a href="/candidates">Jobs</a></li>
    <li><a href="/companies">Companies</a></li>
@endsection                                                                                 

@section('title')
    Add new candidate
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Add a new candidate profile</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <!-- Start of form
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <form method="POST" action="/candidates">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Full Name</label>
                    <input 
                        type="text" 
                        id="name"
                        name="name" 
                        value="{{ old('name') }}"
                        placeholder="Enter full name" 
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input 
                        type="email"
                        id="email"
                        name="email" 
                        value="{{ old('email') }}"
                        placeholder="Enter email"
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <label>Ideal Role</label>
                    <input 
                        type="text" 
                        id="role"
                        name="role" 
                        class="form-control" 
                        placeholder="Software Engineering, Design, Product Management" 
                        value="{{ old('role') }}">
                    <div class='error'>{{ $errors->first('role') }}</div>
                </div>

                <div class="form-group">
                    <label>LinkedIn URL</label>
                    <input 
                        type="text" 
                        id="linkedin"
                        name="linkedin" 
                        value="{{ old('linkedin') }}"
                        placeholder="https://linkedin.com/in/username" 
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('linkedin') }}</div>
                </div>

                <div class="form-group">
                    <label>GitHub URL <small>(Optional)</small></label>
                    <input 
                        type="text"
                        id="github"
                        name="github" 
                        value="{{ old('github') }}"
                        placeholder="https://github.com/username"
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('github') }}</div>
                </div>

                <div class="form-group">
                    <label>Behance URL <small>(Optional)</small></label>
                    <input 
                        type="text"
                        id="behance"
                        name="behance" 
                        value="{{ old('behance') }}"
                        placeholder="https://behance.net/username"
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('behance') }}</div>
                </div>

                <div class="form-group">
                    <label>Personal Website or Project URL <small>(Optional)</small></label>
                    <input 
                        type="text" 
                        id="project"
                        name="project" 
                        value="{{ old('project') }}"
                        placeholder="http://yourprojectdomain.com"
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('project') }}</div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit Profile</button>

            </form>
            <!-- End of form
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        </div>
    </div>

@endsection
