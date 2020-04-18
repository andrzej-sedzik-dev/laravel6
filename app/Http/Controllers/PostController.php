<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {

        $post = DB::table('posts')->where('slug', $slug)->first();
        // dd($post);

        return view('post', [
            'post' => $post
        ]);
    }
}
