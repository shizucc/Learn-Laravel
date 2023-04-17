@extends('layouts.base')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p class='fs-5'> By <a class='text-decoration-none text-dark' href="/blog?author={{$post->author->username}}">  {{$post->author->name}}  </a> in <a class='text-decoration-none text-dark' href="/blog?category={{$post->category->slug}}">{{$post->category->name}}</a>  </p>
            <img  src="https://www.pcinvasion.com/wp-content/uploads/2021/09/Genshin-Impact-Sangonomiya-Kokomi-character-teaser.jpg" class="img-fluid mt-3 mb-3" alt="...">
            <p>{!! $post->body !!}</p>
            
        </div>
    </div>
</div>
    
    
@endsection