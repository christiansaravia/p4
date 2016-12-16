@extends('layouts.master')

@section('title', 'Jobs')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li class="active"><a href="/jobs">Jobs <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Jobs</h1>
			@if(Auth::check())
				<a class="btn btn-primary" href="/jobs/create">Add a new job</a>
			@endif
		</div>
	</div>

	@if(Auth::check())

		<br><br>

		@foreach($jobs as $job)
		<div class="media">
			<div class="media-left media-top">
		    	<a href="#">
		      		<img class="media-object" src="./images/{{ $job->company->company_name }}.png" alt="..." width="100px">
		    	</a>
		  	</div>
		  	<div class="media-body">
		    	<h4 class="media-heading">{{ $job->position }}</h4>
			    <p><mark>{{ $job->company->company_name }}</mark></p>
			    <p><small>{{ $job->type }} | ${{ number_format($job->salary) }}</small></p>
			    <p><small>{{ $job->company->website }}/jobs</small></p>
			    <a href='/jobs/{{ $job->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
		    	<a href='/jobs/{{ $job->id }}/delete'><i class='fa fa-trash'></i> Delete</a><br>
		  	</div>
		</div>
		<hr>
		@endforeach

	@else
		<h4>You need to be signed in to view all job listings in our network.</h4>
		<a class="btn btn-primary" href="/register" role="button">Sign Up</a>
		<a class="btn btn-info" href="/login" role="button">Login</a>
	@endif

@endsection