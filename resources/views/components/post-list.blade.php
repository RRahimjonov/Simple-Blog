<ul class="post-list">
    @foreach($posts as $post)
        <li class="post-card">
            <a class="post-link" href="/posts/{{$post->slug}}">{{$post->title}}</a>
            <p class="post-excerpt">{{ $post->excerpt }}</p>
            <x-post-meta :post="$post" />
        </li>
    @endforeach
</ul>
