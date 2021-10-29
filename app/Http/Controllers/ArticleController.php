<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index', [
            'articles' => Article::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString(),
        ]);
    }

    public function show(Article $article){
        return view('articles.show', [
            'article' => $article
        ]);
    }
}
