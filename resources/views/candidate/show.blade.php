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
            <h2 class="page-header">{{ $candidate->name }}</h2>
            <p>Interested in finding a job in <mark>{{ $candidate->role }}</mark>.</p>
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
        </div>
    </div>

                @if(Auth::user()->email == $candidate->email)
                    <a class='button' href='/candidates/{{ $candidate->id }}/delete'><i class="fa fa-eye"></i> Delete</a>
                    <a class='button' href='/candidates/{{ $candidate->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
                @endif

    <br><br>
    <a class='return' href='/candidates'>&larr; Return to all candidates</a>

@endsection
