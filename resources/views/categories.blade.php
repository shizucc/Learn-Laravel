@extends('layouts.base')
@section('container')
<div class="container">
    <div class="row">
    <h1 class='mt-4 mb-3'>{{$page_title}}</h1>
    
    @foreach ($categories as $category)
    <div class="col-md-4 mb-3">
        <a href="/blog?category={{$category->slug}}">
        <div class="card text-white bg-dark">
            <img src="https://asset.kompas.com/crops/YQrcfXdm304xoWSOn2yxjOxxFyQ=/0x168:5500x3834/750x500/data/photo/2022/01/11/61dd7a1b1e57e.jpg" class="card-img" alt="...">
            <div class="card-img-overlay d-flex align-items-center p-0" >
    
              <h5 style="background-color : rgba(0,0,0,0.7)" class="card-title text-center flex-fill p-4 fs-3">{{$category->name}}</h5>
            </div>
          </div>
        </a>
    </div>
    @endforeach
</div>
</div>
@endsection