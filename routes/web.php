<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\RegisterController;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
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
Route::get('/', [HomepageController::class, 'index']);

Route::get('/news', [ArticleController::class, 'index']);
Route::get('/news/{article:slug}', [ArticleController::class, 'show']);

Route::get('/statistics', function () {
    return view('statistics', [
        'statistics' => Statistic::with('player')->get()
    ]);
});

Route::get('/highlights', [HighlightController::class, 'index']);
Route::get('/highlights/s/{highlight:slug}', [HighlightController::class, 'select']);

Route::get('/shop', function () {
    return view('shop', [
        'products' => Product::with('category')->get()
    ]);
});

Route::get('/register', [RegisterController::class, 'create']);
