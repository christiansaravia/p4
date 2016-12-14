@extends('layouts.master')

@section('title', 'Candidates')

@section('navbar')
    <li class="active"><a href="/candidates">Candidates <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')
	
	@if(Session::get('flash_message') != null))
    	<div class='flash_message'>{{ Session::get('flash_message') }}</div>
	@endif

	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Candidates seeking jobs</h1>
			<a class="btn btn-primary" href="/candidates/create">Create my candidate profile</a>
		</div>
	</div>

	<br><br>

	@foreach($candidates as $candidate)
	<div class="media">
		<div class="media-left media-top">
	    	<a href="#">
	      		<img class="media-object" src="./images/user.png" alt="...">
	    	</a>
	  	</div>
	  	<div class="media-body">
	    	<h4 class="media-heading">{{ $candidate->name }}</h4>
		    <p>
			    <a href="{{ $candidate->linkedin }}"><i class="fa fa-linkedin-square socials" aria-hidden="true"></i></a>
			    <a href="{{ $candidate->portfolio }}"><i class="fa fa-github-square socials" aria-hidden="true"></i></a>
			    <a href="{{ $candidate->portfolio }}"><i class="fa fa-window-maximize socials" aria-hidden="true"></i></a>
			    <!--<a href="{{ $candidate->portfolio }}"><i class="fa fa-behance-square socials" aria-hidden="true"></i></a>-->
		    </p>
		    <p>Seeking a position in <mark>{{ $candidate->role }}</mark>.</p>
		    <p>Contact: {{ $candidate->email }}</p>
	  	</div>
	</div>
	<hr>
	@endforeach

@endsection