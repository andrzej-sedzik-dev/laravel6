<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ArticlesController extends Controller
{


    public function index()
    {
        // show a list of resource.
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        // show a single resource.
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public  function create()
    {
        //Shows view to create resource.
        return view('articles.create');

    }

    public  function store()
    {
        // Persit the new resource (przechwytauje dane z formularzea create)
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');

    }


    public  function edit($id)
    {
        // Show view to edit an existing resource
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public  function update($id)
    {
        // Persist the edited resource.
        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public  function destroy ()
    {
        // Delete the resource
    }

}
