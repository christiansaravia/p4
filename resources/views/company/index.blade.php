@extends('layouts.master')

@section('title', 'Companies')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li class="active"><a href="/companies">Companies <span class="sr-only">(current)</span></a></li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Post a job <small>Over 1,000 candidates seeking jobs</small></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-primary" href="#">Sign in to post a new job</a>
			<a class="btn btn-info" href="#">Request access to post jobs</a>
		</div>
	</div>
@endsection