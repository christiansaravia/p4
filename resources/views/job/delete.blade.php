@extends('layouts.master')

@section('title', 'Candidates')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li class="active"><a href="/jobs">Jobs <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Confirm deletion</h2>
            
            <form method='POST' action='/jobs/{{ $job->id }}'>

                {{ method_field('DELETE') }}

                {{ csrf_field() }}

                <h4>Are you sure you want to delete the {{ $job->position }} job listing from {{ $job->company->company_name }}?</h4>

                <input class="button btn-danger" type='submit' value='Yes'>
                
            </form>
        </div>
    </div>
@endsection