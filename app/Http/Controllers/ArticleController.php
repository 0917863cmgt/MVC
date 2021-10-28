<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        return view('news', [
            'articles' => Article::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    public function show(Article $article){
        return view('news-article', [
            'article' => $article
        ]);
    }
}
