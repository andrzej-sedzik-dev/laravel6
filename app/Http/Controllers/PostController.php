<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $posts = [
            'my-first-post' => 'Hello this is my first blog post!',
            'my-second-post' => 'Hello this is my second blog post!'
        ];

        if (! array_key_exists($post, $posts)){
            abort(404, 'Sorry that post was nod found');

        };

        return view('post', [
            'post' => $posts[$post],
        ]);
    }
}
