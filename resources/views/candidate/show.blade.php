@extends('layouts.master')

@section('title')
    Show username
@stop

@section('content')
    @if($username)
        <h1>Show username: <small>{{ $username }}</small></h1>
    @else
        <h1>No book chosen</h1>
    @endif
@stop
