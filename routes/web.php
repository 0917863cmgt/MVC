<?php

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/news', function () {
    return view('news', [
        'articles' => Article::with('category')->get()
    ]);
});

Route::get('/news/{article:slug}', function (Article $article) {
    //Find an article by its slug and return a view called "news-article"
    return view('news-article', [
        'article' => $article
    ]);
});

Route::get('/news/category/{category:slug}', function (Category $category) {
    //Find an article by its category slug and return a view called "news-article"
    return view('news', [
        'articles' => $category->articles
    ]);
});
