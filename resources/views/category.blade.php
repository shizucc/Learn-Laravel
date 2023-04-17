@extends('layouts.base')

@section('container')
    
    @foreach ($posts as $post)
    <article class='mt-5'>
        <h4><a href="/post/{{$post->slug}}">{{$post->title}}</a></h4>
        <h6>Category : {{$post->category->name}}</h6>
        <p>{{$post->excerpt}}</p>
        <p>Author : {{$post->author->name}}</p>
    </article>
    @endforeach
@endsection