<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index(){
        return view('highlights.index', [
            'highlights' => Highlight::without('comments', 'likes')->paginate(15)->withQueryString()
        ]);
    }

    public function show(Highlight $highlight){
        return view('highlights.show', [
            'highlights' => Highlight::without('comments', 'likes')->get(),
            'selected' => Highlight::where('id', $highlight->id)->first(),
            'comments' => Comment::where('highlight_id',$highlight->id)->get()
        ]);
    }
}
