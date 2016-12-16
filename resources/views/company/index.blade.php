@extends('layouts.master')

@section('title', 'Companies')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li><a href="/jobs">Jobs</a></li>
    <li class="active"><a href="/companies">Companies <span class="sr-only">(current)</span></a></li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Companies in our network</h1>
		</div>
	</div>

	@foreach($companies as $company)
	<div class="media">
		<div class="media-left media-top">
	    	<a href="#">
	      		<img class="media-object" src="./images/{{ $company->company_name }}.png" alt="..." width="100px">
	    	</a>
	  	</div>
	  	<div class="media-body">
	    	<h4 class="media-heading">{{ $company->company_name }}</h4>
		    <p><a href="{{ $company->website }}">Website</a></p>
		    <p><mark>{{ $company->description }}</mark></p>
		    <p>Headquarters: {{ $company->headquarters }}</p>
	  	</div>
	</div>
	<hr>
	@endforeach

@endsection