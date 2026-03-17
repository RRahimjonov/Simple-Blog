<x-app-layout>
      @if($posts->count())
          <ul class="post-list">
              <h1>Tagged by {{ $tag }}</h1>
              @foreach($posts as $post)
                  <x-post-list :post="$post" />
              @endforeach
          </ul>
      @endif
</x-app-layout>
