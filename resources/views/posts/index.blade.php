@extends('app-layout')
@section('content')
    <div>My posts</div>
      @if($posts->count())
          <ul>
              @foreach($posts as $post)
                  <li>
                      <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
                      <p>{{ $post->excerpt }}</p>
                      <p>Posted {{ $post->date->diffForHumans() }} by {{ $post->author }} </p>
                  </li>
              @endforeach
          </ul>
      @endif
@endsection

