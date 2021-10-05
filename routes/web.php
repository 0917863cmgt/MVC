<?php

use Illuminate\Support\Facades\Route;

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
    return view('news');
});
Route::get('/news/{article}', function ($slug) {
    $path = __DIR__ . "/../resources/news/{$slug}.html";

    if (!file_exists($path)){
        abort(404);
    }
    $post = cache()->remember("news.{$slug}", now()->addDay(1), function() use ($path){
        var_dump('in cache');
        return file_get_contents($path);
    });

    return view('news-article', [
        'post' => $post
    ]);
})->where('article', '[A-z_/-]+');
