<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $category_list;
    protected $user_list;
    public function __construct(){
       $this->category_list = Category::all();
       $this->user_list = User::all();
    }
    
    public function index()
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'create post',
            'categories' => $this->category_list,
            'users' => $this->user_list,
        ];
        return view('post_form',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $data = [
            'title' => 'store post'
        ];
        Post::insert(
            [
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'body' => $request->body,
                'slug' => Str::of($request->title)->slug('-'),
                'category_id' => $request->category,
                'user_id' => $request->user
            ]
        );
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post',[
            'title'=> 'blog',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $data = [
            'title'=> 'edit post',
            'post' => $post,
            'categories' => $this->category_list,
            'users' => $this->user_list,
        ];
        return view('post_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {   
        
        $data = [
            'title' => 'update post',
        ];
        Post::firstWhere('id',$post->id)->update(
            [
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'body' => $request->body,
                'slug' => Str::of($request->title)->slug('-'),
                'category_id' => $request->category,
                'user_id' => $request->user
            ]
        );
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::firstWhere('id',$post->id)->delete();
        return redirect(route('post.index'));
    }
}
