<x-app-layout>
    <div class="page-title">Posts</div>
      @if($posts->count())
          <x-post-list :posts="$posts" />
      @endif
</x-app-layout>
