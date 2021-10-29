<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index(){
        return view('highlights.index', [
            'highlights' => Highlight::without('comments', 'likes')->get()
        ]);
    }

    public function select(Highlight $highlight){
        return view('highlights.select', [
            'highlights' => Highlight::without('comments', 'likes')->get(),
            'selected' => Highlight::where('id', $highlight->id)->first(),
            'comments' => Comment::where('highlight_id',$highlight->id)->get()
        ]);
    }
}
