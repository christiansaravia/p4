@extends('layouts.master')


@section('title')
    Show username
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/candidate/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    @if($username)
        <h1>Show username: <small>{{ $username }}</small></h1>
    @else
        <h1>No book chosen</h1>
    @endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/candidate/show.js"></script>
@stop