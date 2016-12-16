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
            <h2 class="page-header">Confirm deletion</h2>
            
            <form method='POST' action='/candidates/{{ $candidate->id }}'>

                {{ method_field('DELETE') }}

                {{ csrf_field() }}

                <h4>Are you sure you want to delete {{ $candidate->name }}'s profile?</h4>

                <input class="button btn-danger" type='submit' value='Yes'>
                
            </form>
        </div>
    </div>
@endsection