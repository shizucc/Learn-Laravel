<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Collection\Collection;

class PostController
{   
   public function posts()
   {    
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'All Post in ' . $category->name;
        }
        if(request('author')){
            $username = User::firstWhere('username', request('author'));
            $title = 'All Post by ' . $username->name; 
        }
        return view('posts',[
            'title' => 'blog',
            'page_title' => $title,
            'posts' => Post::latest()->filter(request(['category','search','author']))->
                        paginate(7)->withQueryString()
        ]);
   }
   public function post(Post $post){
        
        return view('post',[
            'title'=> 'blog',
            'post' => $post
        ]);
        
   }
}
