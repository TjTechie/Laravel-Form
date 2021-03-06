<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        $articles = [ 'abc', 'def' ];
        return view('articles.index', [ 'articles' => $articles ] );
    }

    public function show($intId) {
        $objArticle = articles::find($intId);
        return view( 'articles.show', [ 'article' => $objArticle ] );
    }

    public function create() {
        return view('create_article');
    }

    public function store() {
        $objArticle = new articles();
        $objArticle->title = \request('title');
        $objArticle->excerpt = \request('excerpts');
        $objArticle->body = \request('body');
        dd( $objArticle );
    }

    public function edit($intId) {

    }
}
