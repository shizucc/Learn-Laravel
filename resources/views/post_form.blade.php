@extends('layouts.base')
@section('container')
    <h1>Ini halaman Create</h1>
    <div>
        <form method="post" action="{{route('post.store')}}">
            @csrf
            
            <div class="mb-3">
                <input type="text" placeholder="Title" class="form-control" name='title' required>
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <textarea class="form-control" id="excerpt" rows="3" name="excerpt" required></textarea>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" rows="3" name='body' required></textarea>
            </div>
            <label for="category" class="form-label">Category</label>

            <select class="categorySelect" name="category" id='category'>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <br>
 
            <label for="user" class="form-label">User</label>
            <select class="form-select mb-3" aria-label="User select" id='user' name='user'>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <button class='btn btn-primary'>Add</button>
        </form>
    </div>
@endsection
@section('extra')
    <script>
        $(document).ready(function() {
        $('.categorySelect').select2();
    });
    </script>
@endsection