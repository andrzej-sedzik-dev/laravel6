<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {
        return view('post', [
            'post' => $post = Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
