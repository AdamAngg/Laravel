@extends ('layout')

@section('content')
 @foreach ($posts as $post)
        <article>
          <h1>
            <a href="posts/{{$post->slug}}"> {{$post->title}}</a>
          </h1><p>
           {!!$post->excerpt!!}
          </p>
          <p>By <a href="author/{{$post->author->slug}}">{{$post->author->name}} </a> in <a href="category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        </article>
     @endforeach
@endsection
