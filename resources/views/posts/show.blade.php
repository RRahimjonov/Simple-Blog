@extends('app-layout')

@section('content')
    <div><h1>{{ $post->title }}</h1></div>

    <div>By {{ $post->author }} / {{ $post->date->diffForHumans() }}</div>

    <div>
        {{ $post->contents }}
    </div>
@endsection
