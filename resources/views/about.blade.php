@extends('layouts.base')

@section('container')
    <h2>Author : {{ $author }}</h2>
    <img src="img/{{$image}}" alt="" width="30%">
@endsection



Category::create([
        'name' => 'Gosip',
        'slug' => 'gosip'
]
)

$category = new App\Models\Category
$category->name = 'Gosip';
$category->slug = 'gosip';
$category->save();

$category2 = new App\Models\Category
$category2->name = 'Berita';
$category2->slug = 'berita';
$category2->save();

$category3 = new App\Models\Category
$category3->name = 'Keuangan';
$category3->slug = 'keuangan';
$category3->save();