<x-app-layout>
    <div class="page-title">Posts</div>
      @if($posts->count())
        <ul class="post-list">
            @foreach($posts as $post)
                <x-post-list :post="$post" />
            @endforeach
        </ul>
      @endif
</x-app-layout>

