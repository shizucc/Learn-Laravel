@extends('layouts.base')
@section('container')
    <h1>{{$title}}</h1>
    <h2>Hello</h2>
    <table class='display' id='postTable'>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->author->name}}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    
@endsection
@section('extra')
    <script>
        $(document).ready(function () {
            $('#postTable').DataTable();
        });
    </script>
@endsection