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

    }

    public  function store()
    {
        // Persit the new resource (przechwytauje dane z formularzea create)
    }




    public  function edit()
    {
        // Show view to edit an existing resource
    }

    public  function update()
    {
        // Persist the edited resource.
    }

    public  function destroy ()
    {
        // Delete the resource
    }

}
