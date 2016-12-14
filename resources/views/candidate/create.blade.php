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
                        value="{{ old('name', 'John Doe') }}"
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
                        value="{{ old('email', 'john@gmail.com') }}"
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
                        value="{{ old('linkedin', 'https://linkedin.com/in/john') }}"
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
                        value="{{ old('github', 'https://github.com/john') }}">
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
                        value="{{ old('website','https://johndoe.com') }}"
                    >
                    <div class='error'>{{ $errors->first('website') }}</div>
                </div>

                <div class="form-group">
                    <label>Ideal Role</label>
                    <select  
                        id="role"
                        name="role" 
                        class="form-control"
                    >
                        
                        <option value="" disabled selected>Select one</option>
                        <option value="software">Software Engineering</option>
                        <option value="design">Design</option>
                        <option value="product">Product Management</option>
                        <option value="business">Business Development</option>
                        <option value="marketing">Marketing</option>
                        <option value="other">Dude, my ideal role wasn't one of these options!</option>
                    </select>
                    <div class='error'>{{ $errors->first('role') }}</div>
                </div>

                <div class="form-check">
                    <input 
                        type="checkbox"
                        id="agreement"
                        name="agreement" 
                        class="form-check-input"
                        value="{{ old('agreement') }}"
                    > 
                    <small class="form-text text-muted">I agree to receive emails from company founders and recruiters in Lowercase's network regarding job opportunities based on my answers above. We promise not to spam.</small> 
                    <div class='error'>{{ $errors->first('agreement') }}</div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit Profile</button>

            </form>
        </div>
    </div>

@endsection
