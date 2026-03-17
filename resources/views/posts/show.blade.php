<x-app-layout>
    <div class="post-header"><h1 class="post-title">{{ $post->title }}</h1></div>

    <div class="post-meta">By {{ $post->author }} / {{ $post->date->diffForHumans() }}</div>

    <div class="post-body">
        {{ $post->contents }}
    </div>
</x-app-layout>
