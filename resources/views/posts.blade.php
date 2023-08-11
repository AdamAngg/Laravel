@extends ('layout')

@section('content')

@include('post-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        
        @include('post-featured')

            <div class="lg:grid lg:grid-cols-2">

            @include('post-card')
            @include('post-card')

            </div>
            <div class="lg:grid lg:grid-cols-3">
            
            @include('post-card')
            @include('post-card')
            @include('post-card')
           
            
            </div>
        </main>
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
@endsection
