<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ArticlesController extends Controller
{


    public function index()
    {
        // show a list of resource.

        if (request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get;
        }

        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // show a single resource.
        // $article = Article::findOrFail($id);
        // return $article;

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


/*
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
*/

/*
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
*/


        $validatedAttributes = $this->validateArticle();

        /*
                Article::create([
                    'title' => request('title'),
                    'excerpt' => request('excerpt'),
                    'body' => request('body')
                ]);
        */


        Article::create($validatedAttributes);



        return redirect('/articles');

    }


    public  function edit(Article $article)
    {
        // Show view to edit an existing resource
        // $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public  function update(Article $article)
    {
        // Persist the edited resource.

        $article->update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }

    public  function destroy ()
    {
        // Delete the resource
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

}
