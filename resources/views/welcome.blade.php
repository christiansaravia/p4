@extends('layouts.master')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')
    <header>    
        <div class="jumbotron" style="background: white">
            <h1 class="title">Matching candidates with early-stage companies</h1>
            <br>
            <p>Lowercase companies offer some of the most interesting and rewarding jobs in the world. Now you can submit your profile to be considered as a candidate for one of those job openings. We'll just email you.</p>
            <br>
            <p>
                <a class="btn btn-primary btn-lg" href="/candidates" role="button">Find a job</a>
                <a class="btn btn-info btn-lg" href="/companies" role="button">Post a job</a>
            </p>
        </div>
    </header>
@endsection