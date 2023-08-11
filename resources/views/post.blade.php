@extends('layout')

@section('content')
<article>
    <h1>{!!$post->title!!}</h1>
    <div>
        {!!$post->body!!}
    </div> 
    <p>By <a href="author/{{$post->author->slug}}">{{$post->author->name}} </a> In <a href="category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
   </article>
   <a href="/">Go back</a>
@endsection