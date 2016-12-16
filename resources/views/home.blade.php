@extends('layouts.master')

@section('title', 'Companies')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li><a href="/jobs">Jobs</a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
