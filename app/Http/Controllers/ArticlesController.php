<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }





}
