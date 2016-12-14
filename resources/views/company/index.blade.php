@extends('layouts.master')

@section('title', 'Companies')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li class="active"><a href="/companies">Companies <span class="sr-only">(current)</span></a></li>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Companies offering jobs</h1>
			<a class="btn btn-primary" href="#">Create a company profile</a>
		</div>
	</div>

	<br><br>

	<div class="media">
		<div class="media-left media-top">
	    	<a href="#">
	      		<img class="media-object" src="./images/gimlet.png" alt="..." width="100px">
	    	</a>
	  	</div>
	  	<div class="media-body">
	    	<h4 class="media-heading">Gimlet Media</h4>
		    <p>Website: http://gimletmedia.com</p>
		    <p>Mission: We strive to make the best podcasts in the world.</p>
		    <p>Looking for: <mark>Software Engineers, Product Managers, Designers</mark>.</p>
		    <p>Contact: jobs@gimlet.com</p>
	  	</div>
	</div>
	<hr>

	<div class="media">
		<div class="media-left media-top">
	    	<a href="#">
	      		<img class="media-object" src="./images/docker.png" alt="..." width="100px">
	    	</a>
	  	</div>
	  	<div class="media-body">
	    	<h4 class="media-heading">Docker</h4>
		    <p>Website: http://gimletmedia.com</p>
		    <p>Mission: We strive to make the best podcasts in the world.</p>
		    <p>Looking for: <mark>Software Engineers, Product Managers, Designers</mark>.</p>
		    <p>Contact: jobs@gimlet.com</p>
	  	</div>
	</div>
	<hr>

	<div class="media">
		<div class="media-left media-top">
	    	<a href="#">
	      		<img class="media-object" src="./images/kickstarter.png" alt="..." width="100px">
	    	</a>
	  	</div>
	  	<div class="media-body">
	    	<h4 class="media-heading">Kickstarter</h4>
		    <p>Website: http://gimletmedia.com</p>
		    <p>Mission: We strive to make the best podcasts in the world.</p>
		    <p>Looking for: <mark>Software Engineers, Product Managers, Designers</mark>.</p>
		    <p>Contact: jobs@gimlet.com</p>
	  	</div>
	</div>
	<hr>



@endsection