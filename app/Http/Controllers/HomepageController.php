<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('homepage.index', [
                'articles' => Article::with('category', 'author')->get()]
        );
    }
}
