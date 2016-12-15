@extends('layouts.master')

@section('navbar')
    <li class="active"><a href="/candidates">Candidates <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('title')
    Add new candidate
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Add your profile to our network of candidates</h2>
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
                    <label>LinkedIn URL</label>
                    <input 
                        type="url" 
                        id="linkedin"
                        name="linkedin" 
                        value="{{ old('linkedin') }}"
                        placeholder="https://linkedin.com/in/username"
                        class="form-control" 
                    >
                    <small class="form-text text-muted">Make sure the education and work experience sections are updated.</small>
                    <div class='error'>{{ $errors->first('linkedin') }}</div>
                </div>

                <div class="form-group">
                    <label>GitHub URL<small> (Optional)</small></label>
                    <input 
                        type="url" 
                        id="github"
                        name="github" 
                        class="form-control" 
                        placeholder="https://github.com/username" 
                        value="{{ old('github') }}">
                    <div class='error'>{{ $errors->first('github') }}</div>
                </div>

                <div class="form-group">
                    <label>Personal Website URL<small> (Optional)</small></label>
                    <input 
                        type="url" 
                        id="website"
                        name="website" 
                        class="form-control" 
                        placeholder="https://yourdomain.com" 
                        value="{{ old('website') }}"
                    >
                    <div class='error'>{{ $errors->first('website') }}</div>
                </div>

                <div class="form-group">
                    <label>Ideal Role</label>
                    <select  
                        id="role"
                        name="role" 
                        class="form-control"
                        value="{{ old('website') }}"
                    >
                        
                        <option value="" disabled selected>Select one</option>
                        <option value="Software Engineering">Software Engineering</option>
                        <option value="Design">Design</option>
                        <option value="Product Management">Product Management</option>
                        <option value="Business Development">Business Development</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Other">Dude, my ideal role wasn't one of these options!</option>
                    </select>
                    <div class='error'>{{ $errors->first('role') }}</div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit Profile</button>

            </form>
        </div>
    </div>

@endsection
