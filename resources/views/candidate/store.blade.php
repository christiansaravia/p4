@extends('layouts.master')

@section('navbar')
    <li class="active"><a href="/candidates">Candidates <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('title')
    Add new candidate
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            
        	@if(Session::get('flash_message') != null))
			    <div class='flash_message'>{{ Session::get('flash_message') }}</div>
			@endif

        </div>
    </div>

@endsection
