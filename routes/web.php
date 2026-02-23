<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Facades\Sheets;
use app\Models\Post;

Route::get('/', function () {
    $posts = Sheets::collection('posts')->all();

     return view('posts.index', [
        'posts' => $posts
     ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Sheets::collection('posts')->all()->firstWhere('slug', $slug);
// dd($post);
    abort_if(is_null($post), 404);

    return view('posts.show', ['post' => $post]);
});

Route::get('/authors/{author}', function ($author) {
    // dd($author);
    $posts = Sheets::collection('posts')
    ->all()
    ->filter(fn (Post $post) => $post->author === $author);

// dd($posts);
    abort_if(is_null($posts), 404);

    return view('authors.show', ['posts' => $posts, 'authorName' => $posts->first()->author_name]);
});