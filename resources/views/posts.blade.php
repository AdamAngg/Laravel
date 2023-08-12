<x-layout>

  <x-post-header />

  <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    <x-post-featured :post="$posts->first()" />

    <div class="lg:grid lg:grid-cols-6">
      @foreach($posts->skip(1) as $post)
      <x-post-card :post="$post" class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}" />
      @endforeach
    </div>
  </main>

</x-layout>








<!-- @foreach ($posts as $post)
        <article>
          <h1>
            <a href="posts/{{$post->slug}}"> {{$post->title}}</a>
          </h1><p>
            {!!$post->excerpt!!}
          </p>
          <p>By <a href="author/{{$post->author->slug}}">{{$post->author->name}} </a> in <a href="category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        </article>
        @endforeach -->