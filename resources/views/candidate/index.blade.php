@extends('layouts.master')

@section('title', 'Candidates')

@section('navbar')
    <li class="active"><a href="/candidates">Candidates <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Find a job <small>Over 85 companies recruiting</small></h1>
		</div>
		<a class="btn btn-primary" href="/candidates/create">Create my candidate profile</a>
	</div>

	<div class="col-md-12">
		<h2 class="page-header">Companies hiring</h2>
	</div>
	<div class="row">
		<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/aerofs.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/automattic.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/bellhops.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/bitly.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	</div>

	<div class="row">
		<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/bluebottle.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/brightwheel.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/comparably.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/crowdrise.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	</div>

	<div class="row">
		<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/docker.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/gimlet.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/kickstarter.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/mark43.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	</div>

	<div class="row">
		<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/9gag.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/medium.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/uber.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	  	<div class="col-xs-6 col-md-3">
	    	<a href="#" class="thumbnail">
	      		<img src="./images/vidme.png" alt="..." width="100px" height="200px">
	    	</a>
	  	</div>
	</div>


@endsection