<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\Highlight;
use App\Models\Product;
use App\Models\Statistic;
use App\Models\User;
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
    return view('homepage', [
        'articles' => Article::with('category', 'author')->get()]
    );
});

Route::get('/news', function () {
    return view('news', [
        'articles' => Article::with('category', 'author')->get()
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

Route::get('/statistics', function () {
    return view('statistics', [
        'statistics' => Statistic::with('player')->get()
    ]);
});
Route::get('/highlights', function () {
    return view('highlights', [
        'highlights' => Highlight::with('user')->get()
    ]);
});
Route::get('/highlights/h/{highlight:slug}', function (Highlight $highlight) {
    return view('highlight-selected', [
        'highlights' => Highlight::with('user')->get(),
        'selected' => $highlight
    ]);
});
Route::get('/shop', function () {
    return view('shop', [
        'products' => Product::with('category')->get()
    ]);
});
