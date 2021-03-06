<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        $articles = articles::all();
        return view('view_articles', [ 'articles' => $articles ] );
    }

    // todo: $article should be the same variable which we are sneding as wildecard while routing
    public function show(articles $article) {
        // todo: we can use below code as well instead of adding the parameters in show method
//        $article = articles::findOrFail($intId);
//        $article = articles::where('id', 1)->first();
        return view( 'edit_article', [ 'article' => $article ] );
    }

    public function create() {
        return view('create_article');
    }

    public function store() {
        \request()->validate([
            'title'=> ['required','min:3', 'max:15'],
            'excerpts' => ['required', 'min:5'],
            'body' => ['required']
            ]);
        $objArticle = new articles();
        $objArticle->title = \request('title');
        $objArticle->excerpt = \request('excerpts');
        $objArticle->body = \request('body');
        $objArticle->save();
        return redirect( 'articles' );
    }

    public function edit($intId) {
        $article = articles::findOrFail($intId);
        return view( 'edit_article', [ 'article' => $article ] );
    }

    public function update($intId) {
        $article = articles::find($intId);
        $article->title = \request('title');
        $article->excerpt = \request('excerpt');
        $article->body = \request('body');
        $article->save();

        return redirect( 'articles' );
    }
}
