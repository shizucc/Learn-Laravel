<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        \App\Models\Post::factory(40)->create();
        \App\Models\User::factory(3)->create();

        \App\Models\Category::create(
            [
                'name' => 'Gosip',
                'slug' => 'gosip',
            ]
        );

        \App\Models\Category::create(
            [
                'name' => 'Berita',
                'slug' => 'berita',
            ]
        );

        \App\Models\Category::create(
            [
                'name' => 'Keuangan',
                'slug' => 'keuangan',
            ]
        );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*
        

        \App\Models\User::create(
            [
                'name' => 'Yae',
                'email' => 'yae@gmail.com',
                'password' => bcrypt('yae123')
            ]
            );

            \App\Models\User::create(
            [
                'name' => 'Gorou',
                'email' => 'gorou@gmail.com',
                'password' => bcrypt('gorou')
            ]
            );


            \App\Models\Post::create(
            [
                'title' => 'Ayaka lonet',
                'category_id' => 1,
                'slug' => 'ayaka-lonet',
                'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus tempore quis asperiores quisquam repellendus eos, id assumenda explicabo harum incidunt labore eaque ullam saepe eius dolores porro deleniti facere cumque, debitis nesciunt iure hic! Atque dolores rem optio officiis dolorum!',
                'user_id' => '1'
            ]
            );
        
            \App\Models\Post::create(
            [
                'title' => 'Kokomi cantik',
                'category_id' => 2,
                'slug' => 'kokomi-cantik',
                'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus tempore quis asperiores quisquam repellendus eos, id assumenda explicabo harum incidunt labore eaque ullam saepe eius dolores porro deleniti facere cumque, debitis nesciunt iure hic! Atque dolores rem optio officiis dolorum!',
                'user_id' => '2'
            ]
            );
        
            \App\Models\Post::create(
            [
                'title' => 'Kokomi lonet',
                'category_id' => 1,
                'slug' => 'kokomi-lonet',
                'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus tempore quis asperiores quisquam repellendus eos, id assumenda explicabo harum incidunt labore eaque ullam saepe eius dolores porro deleniti facere cumque, debitis nesciunt iure hic! Atque dolores rem optio officiis dolorum!',
                'user_id' => '1'
            ]
            );
        
            \App\Models\Post::create(
            [
                'title' => 'Harga saham turun',
                'category_id' => 3,
                'slug' => 'harga-saham-turun',
                'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus tempore quis asperiores quisquam repellendus eos, id assumenda explicabo harum incidunt labore eaque ullam saepe eius dolores porro deleniti facere cumque, debitis nesciunt iure hic! Atque dolores rem optio officiis dolorum!',
                'user_id' => '2'
            ]
            );
        
            \App\Models\Post::create(
            [
                'title' => 'Besok Ngivent',
                'category_id' => 2,
                'slug' => 'besok-ngivent',
                'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus tempore quis asperiores quisquam repellendus eos, id assumenda explicabo harum incidunt labore eaque ullam saepe eius dolores porro deleniti facere cumque, debitis nesciunt iure hic! Atque dolores rem optio officiis dolorum!',
                'user_id' => '1'
            ]
            );
            */

    }
}
