<x-app-layout>
    <div class="post-header"><h1 class="post-title">{{ $post->title }}</h1></div>

    <x-post-meta :post="$post" />

    <div class="post-body">
        {{ $post->contents }}
    </div>
</x-app-layout>
