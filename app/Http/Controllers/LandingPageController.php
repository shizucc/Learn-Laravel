<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class LandingPageController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Landing Page',
            'posts' => Post::all()
        ];
        return view('index',$data);
    }
}
