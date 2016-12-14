@extends('layouts.master')

@section('navbar')
    <li class="active"><a href="/candidates">Candidates <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('title', 'Add new candidate')

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
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}">
                    <div class='error'>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('name') }}">
                    <small class="form-text text-muted">We promise not to spam. This is to contact you about any relevant job opportunities from our network of companies.</small>
                    <div class='error'>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <label>LinkedIn <small>(Optional)</small></label>
                    <input type="url" name="linkedin" class="form-control" placeholder="LinkedIn URL" value="{{ old('name') }}">
                    <small id="emailHelp" class="form-text text-muted">If you include, make sure the education and work experience sections are updated.</small>
                    <div class='error'>{{ $errors->first('linkedin') }}</div>
                </div>

                <div class="form-group">
                    <label>GitHub, Behance, or Link to Portfolio <small>(Optional)</small></label>
                    <input type="url" name="portfolio" class="form-control" placeholder="GitHub/Behance/Portfolio URL" value="{{ old('name') }}">
                    <div class='error'>{{ $errors->first('portfolio') }}</div>
                </div>

                <div class="form-group">
                    <label>Ideal Role</label>
                    <select type="" name="role" class="form-control">
                        <option value="" disabled selected>Select one</option>
                        <option value="se">Software Engineering</option>
                        <option value="ds">Design</option>
                        <option value="pm">Product Management</option>
                        <option value="bd">Business Development</option>
                        <option value="mk">Marketing</option>
                        <option value="or">Dude, my ideal role wasn't one of these options!</option>
                    </select>
                <div class='error'>{{ $errors->first('role') }}</div>
                </div>

                <div class="form-group">
                    <label>Tell us about projects you've worked on, either as part of a job or for fun. Feel free to include any relevant links to live projects and/or GitHub repos.</label>
                    <textarea name="projects" class="form-control" rows="6"></textarea>
                <div class='error'>{{ $errors->first('projects') }}</div>
                </div>

                <div class="form-group">
                    <label>Tell us your personal story in no more than 2 paragraphs. This is our chance to get to know you.</label>
                    <textarea name="story" class="form-control" rows="6"></textarea>
                <div class='error'>{{ $errors->first('story') }}</div>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input name="agreement" type="checkbox" class="form-check-input"> I agree to receive emails from company founders and recruiters in Lowercase's network regarding job opportunities based on my answers above.
                    </label> 
                <div class='error'>{{ $errors->first('agreement') }}</div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

@endsection
