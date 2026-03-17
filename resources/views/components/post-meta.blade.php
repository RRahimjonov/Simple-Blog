<div class="post-meta-block">
    <p class="post-meta">Posted {{ $post->date->diffForHumans() }} by <a href="/authors/{{ $post->author }}">{{ $post->author_name   }}</a></p>
    @if($post->tags)
        <div class="post-tags post-tags--inline">
            @foreach($post->tags as $tag)
                <a class="post-tag" href="/tags/{{$tag}}">
                    {{ $tag }}
                </a>
            @endforeach
        </div>
    @endif
</div>
