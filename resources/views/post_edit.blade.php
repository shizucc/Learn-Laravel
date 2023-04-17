@extends('layouts.base')
@section('container')
    <h1>Ini halaman Edit</h1>
    <div>
        <form method='post' action="{{route('post.update', $post)}}">
            @csrf
            @method('put')
            <div class="mb-3">
                <input type="text" placeholder="Title" class="form-control" name='title' required value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <textarea class="form-control" id="excerpt" rows="3" name="excerpt" required>{{$post->excerpt}}</textarea>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" rows="3" name='body' required>{{$post->body}}</textarea>
            </div>
            <label for="category" class="form-label">Category</label>
            <select class="form-select mb-3" aria-label="Category select" id='category' name='category'>
                @foreach ($categories as $category)
                    <option {{ $post->category->id === $category->id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <label for="user" class="form-label">User</label>
            <select class="form-select mb-3" aria-label="User select" id='user' name='user'>
                @foreach ($users as $user)
                    <option {{$post->author->id === $user->id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <button class='btn btn-primary'>Edit</button>
        </form>
    </div>
@endsection