<?php

use App\Models\Article;
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
        'articles' => Article::all()
    ]);
});

Route::get('/news/{article}', function ($slug) {
    //Find an article by its slug and return a view called "news-article"
    $article = Article::find($slug);
    return view('news-article', [
        'article' => $article
    ]);
})->where('article', '[A-z_/-]+');
