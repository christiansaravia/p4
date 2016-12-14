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
            <form method="POST" action="/candidates">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('name') }}">
                    <small class="form-text text-muted">We'll send a link to verify your address. We promise not to spam. This is to contact you about any relevant job opportunities from our network of companies.</small>
                </div>

                <div class="form-group">
                    <label>LinkedIn</label>
                    <input type="url" class="form-control" id="exampleInputPassword1" placeholder="LinkedIn URL">
                    <small id="emailHelp" class="form-text text-muted">Make sure your education and work experience are updated.</small>
                </div>

                <div class="form-group">
                    <label>GitHub, Behance, or Link to Portfolio <small>(Optional)</small></label>
                    <input type="url" class="form-control" id="exampleInputPassword1" placeholder="GitHub/Behance/Portfolio URL">
                </div>

                <div class="form-group">
                    <label>Ideal Role</label>
                    <select class="form-control" id="exampleSelect1">
                        <option>Select one</option>
                        <option>Software Engineering</option>
                        <option>Design</option>
                        <option>Product Management</option>
                        <option>Business Development</option>
                        <option>Marketing</option>
                        <option>Dude, my ideal role wasn't one of these options!</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Location, location, location! Where would you like to work? Check all the cities you'd be open to working in, or simply check "Anywhere" if you're not tied to a place.</label>
                     <div class="checkbox">
                        <label>
                          <input type="checkbox"> Anywhere
                          <br>
                          <input type="checkbox"> San Francisco
                          <br>
                          <input type="checkbox"> Los Angeles
                          <br>
                          <input type="checkbox"> New York
                          <br>
                          <input type="checkbox"> Boston
                          <br>
                          <input type="checkbox"> Remote
                          <br>
                          <input type="checkbox"> My city isn't listed here
                        </label>
                      </div>
                    </div>

                <div class="form-group">
                    <label>Tell us about projects you've worked on, either as part of a job or for fun. Feel free to include any relevant links to live projects and/or GitHub repos.</label>
                    <textarea class="form-control" id="exampleTextarea" rows="6"></textarea>
                </div>

                <div class="form-group">
                    <label>Tell us your personal story in no more than 2 paragraphs. This is our chance to get to know you.</label>
                    <textarea class="form-control" id="exampleTextarea" rows="6"></textarea>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> I agree to receive emails from company founders and recruiters in Lowercase's network regarding job opportunities based on my answers above.
                    </label> 
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

    <br>

    @if(count($errors) > 0)
	    <ul>
	        @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>
	@endif

@endsection
