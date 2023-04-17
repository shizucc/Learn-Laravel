@extends('layouts.base')
@section('container')


<h2 class='mt-4 text-center'>{{$page_title}}</h2>
  <div class="row justify-content-center">
  <div class="col-md-6">
    <form action="{{route('post.index')}}">
      @if (request('category'))
        <input type="hidden" name="category" value={{request('category')}}>
      @endif 

      @if (request('author'))
        <input type="hidden" name="author" value={{request('author')}}>
      @endif
    <div class="input-group mb-3 mt-2">
      <input type="text" class="form-control" placeholder="Search an Article" name='search' value={{request('search')}}>
      <button class="btn btn-outline-secondary" type="submit" >Search</button>
    </div>
  </form>
    <div>
      <a class='btn btn-primary' href="{{route('post.create')}}">Add Post</a>
    </div>
  </div>
</div>


@if ($posts->count())
<div class="card mt-3 mb-3">
    <img src="https://images.pexels.com/lib/api/pexels.png" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title"> <a class='text-decoration-none text-dark' href="/post/{{$posts[0]->slug}}">{{$posts[0]->title}}</a> </h5>
      <p class='fs-5'>By : <a class='text-decoration-none' href="/blog?author={{$posts[0]->author->username}}">{{$posts[0]->author->name}} </a> in <a class='text-decoration-none' href="/blog?category={{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a>  at {{$posts[0]->published_at}}</p>
      <p class="card-text">{{$posts[0]->excerpt}}</p>
      <a class='btn btn-primary' href="/post/{{$posts[0]->slug}}">Read More</a>
      <a href="{{route('post.edit', $posts[0]) }}" class='btn btn-warning'>Edit</a>
      <form method='post' action="{{route('post.destroy', $posts[0])}}">
        @csrf
        @method('delete')
        <button class='btn btn-danger'>Delete</button>
      </form>
    </div>
  </div>




<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0, 0.7) ">
          <a class='text-decoration-none text-white' href="/blog?category={{$post->category->slug}}">{{$post->category->name}}</a> 
        </div>
        <img src="https://www.pcinvasion.com/wp-content/uploads/2021/09/Genshin-Impact-Sangonomiya-Kokomi-character-teaser.jpg" class="card-img-top"  alt="...">
        <div class="card-body">
          <h5 class="card-title"><a class='text-decoration-none text-dark' href="/post/{{$post->slug}}">{{$post->title}}</a></h5>
          <p class='fs-5'>By <a class='text-decoration-none text-primary' href="/blog?author={{$post->author->username}}">{{$post->author->name}}</a></p>
          <p class="card-text">{{$post->excerpt}}</p>
          <a href="{{route('post.show',  $post) }}" class="btn btn-primary">Read more</a>
          <a href="{{route('post.edit', $post) }}" class='btn btn-warning'>Edit</a>
          <form method='post' action="{{route('post.destroy', $post)}}">
            @csrf
            @method('delete')
            <button class='btn btn-danger'>Delete</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@else
  <h3 class='text-center'>No Posts Found</h3>
@endif

<div class="d-flex justify-content-end">
  {{$posts->links()}}
</div>
{{--  --}}




@endsection