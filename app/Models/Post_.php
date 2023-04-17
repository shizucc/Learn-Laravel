<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $posts = [
        [
            'title' => 'Kokomi Menikah denganku',
            'slug' => 'kokomi-menikah-denganku',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste labore dolore sint eum ullam explicabo temporibus quis quas! Veritatis enim quibusdam sint, dolorum ad dolor nulla modi sit dolorem laudantium quaerat dolore, distinctio odit veniam inventore fugit animi voluptates? Est harum exercitationem doloribus cumque repellendus doloremque autem architecto possimus repellat asperiores voluptatum id esse illo quo quae fugiat eveniet eius consectetur, a quidem dicta rem. Similique voluptates doloremque fugiat aliquid nemo excepturi veniam. Dolorum deleniti doloremque fugiat sint voluptate adipisci mollitia aperiam eveniet enim, obcaecati illum. Voluptas eligendi nulla corporis minus debitis id, unde corrupti delectus minima aspernatur, cupiditate nam?',
            'author' => 'Alfi Ghozwy'
        ],
        [
            'title' => 'Ayaka lonet',
            'slug' => 'ayaka-lonet',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus tempore quis asperiores quisquam repellendus eos, id assumenda explicabo harum incidunt labore eaque ullam saepe eius dolores porro deleniti facere cumque, debitis nesciunt iure hic! Atque dolores rem optio officiis dolorum!',
            'author' => 'Kujou Sara'
            
        ]
    ];

    public static function getAllPosts()
    {
        return collect(self::$posts);
    }

    public static function getPost($slug){
        $posts = static::getAllPosts();
        $post = $posts->firstWhere('slug',$slug);
        return $post;
    }
}
