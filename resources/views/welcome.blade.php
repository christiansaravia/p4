@extends('layouts.master')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li><a href="/jobs">Jobs</a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')
    <header>    
        <div class="jumbotron">
            <h1 class="title">Matching candidates with early-stage companies</h1>
            <br>
            <p>Lowercase companies offer some of the most interesting and rewarding jobs in the world. Now you can submit your profile to be considered as a candidate for one of those job openings. We'll just email you.</p>
            <br>
            <p>
                @if(Auth::check())
                    <a class="btn btn-primary btn-lg" href="/candidates" role="button">Candidates</a>
                    <a class="btn btn-info btn-lg" href="/jobs" role="button">Jobs</a>
                @else
                    <a class="btn btn-primary btn-lg" href="/register" role="button">Sign Up</a>
                @endif
            </p>
        </div>
    </header>
@endsection