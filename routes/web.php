<?php

use Illuminate\Support\Facades\Route;

/*Route::get('test', function (){
   return view('test');
});*/

/*Route::get('/', function () {
    $name = request('name');

    return $name;
    //http://localhost:8000/?name=Andrzej
});*/

/*Route::get('/', function () {
    $name = request('name');

    // <h1><?= $name;></h1>
    // http://localhost:8000/?name=%3Cscript%3Ealert(%27hello%27)%3C/script%3E
    // BROWSER:  hello
    return view('test', [
        'name' => $name
    ]);

   //  <h1><?= htmlspecialchars($name, ENT_QUOTES) ></h1>
   //  http://localhost:8000/?name=%3Cscript%3Ealert(%27hello%27)%3C/script%3E
   // BROWSER: <script>alert('hello')</script>

    // BETTER
    //<h1> {{ $name }}</h1>
    // BROWSER: <script>alert('hello')</script>
});*/

/*Route::get('/posts/{post}', function () {
    return view('post');
});*/

/*Route::get('/posts/{post}', function ($post) {
    return $post;
});*/

/*Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello this is my first blog post!',
        'my-second-post' => 'Hello this is my second blog post!'
    ];

    return view('post', [
        'post' => $posts[$post],
    ]);
});
//    <h1> My Blog Post!</h1>
//        <p>{{ $post }}</p>
// http://localhost:8000/posts/my-first-post
// BROWSER: My Blog Post!
// Hello this is my first blog post!
// http://localhost:8000/posts/my-second-post
// My Blog Post!
// Hello this is my second blog post!
// http://localhost:8000/posts/my-third-post
// Undefined index: my-third-post*/

/*Route::get('/posts/{post}', function ($post) {
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
});*/


Route::get('/posts/{post}',  'PostController@show');







































