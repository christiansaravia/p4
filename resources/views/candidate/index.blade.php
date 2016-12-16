@extends('layouts.master')

@section('title', 'Candidates')

@section('navbar')
    <li class="active"><a href="/candidates">Candidates <span class="sr-only">(current)</span></a></li>
    <li><a href="/jobs">Jobs</a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Candidates</h1>
			@if(Auth::check())
				<a class="btn btn-primary" href="/candidates/create">Add your candidate profile</a>
			@endif
		</div>
	</div>

	@if(Auth::check())

		<br><br>

		@foreach($candidates as $candidate)
		<div class="row">
			<div class="col-md-12">
		    	<h4>{{$candidate->name}}</h4>
			    <p>
				    <a href="{{ $candidate->linkedin }}"><i class="fa fa-linkedin-square socials" aria-hidden="true"></i></a>
				    
				    @if( ! empty($candidate->github))
					    <a href="{{ $candidate->github }}"><i class="fa fa-github-square socials" aria-hidden="true"></i></a>
					@endif

					@if( ! empty($candidate->behance))
						<a href="{{ $candidate->behance }}"><i class="fa fa-behance-square socials" aria-hidden="true"></i></a>
					@endif

					@if( ! empty($candidate->project))
						<a href="{{ $candidate->project }}"><i class="fa fa-window-maximize socials" aria-hidden="true"></i></a>
					@endif
			    </p>
			    
			    <p>Seeking a position in <mark>{{$candidate->role}}</mark>.</p>
			    <p>Contact: {{$candidate->email}}</p>

				<a class='button' href='/candidates/{{ $candidate->id }}'><i class="fa fa-eye"></i> View</a>
				@if(Auth::user()->email == $candidate->email)
					<a class='button' href='/candidates/{{ $candidate->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
				@endif

		  	</div>
		</div>
		<hr>
		@endforeach

	@else
		<h4>You need to be signed in to view all candidates in our network.</h4>
		<a class="btn btn-primary" href="/register" role="button">Sign Up</a>
		<a class="btn btn-info" href="/login" role="button">Login</a>
	@endif

@endsection