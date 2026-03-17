<x-app-layout>
    <div class="page-title">My posts</div>
      @if($posts->count())
          <ul class="post-list">
              @foreach($posts as $post)
                  <li class="post-card">
                      <a class="post-link" href="/posts/{{$post->slug}}">{{$post->title}}</a>
                      <p class="post-excerpt">{{ $post->excerpt }}</p>
                      <p class="post-meta">Posted {{ $post->date->diffForHumans() }} by {{ $post->author }} </p>
                  </li>
              @endforeach
          </ul>
      @endif
</x-app-layout>
