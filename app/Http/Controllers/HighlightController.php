<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Highlight;
use App\Models\Like;
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
            'comments' => Comment::where('highlight_id',$highlight->id)->get(),
            'like' => Like::where('highlight_id', '=', $highlight->id)->where('user_id', '=', auth()->user()->id)->first(),
            'hasLike' => Like::where('highlight_id', '=', $highlight->id)->where('user_id', '=', auth()->user()->id)->exists(),
            'hasCommentLikes' => CommentLike::where('highlight_id', '=', $highlight->id)->where('user_id', '=', auth()->user()->id)->get()
        ]);
    }
}
