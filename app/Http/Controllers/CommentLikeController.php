<?php

namespace App\Http\Controllers;

use App\Models\CommentLike;
use App\Models\Highlight;
use Illuminate\Http\Request;

class CommentLikeController extends Controller
{
    public function store(Highlight $highlight)
    {
        $attributes = request()->validate([
            'highlight_id' => 'required|integer|min:1',
            'comment_id' => 'required|integer|min:1',
            'user_id' => 'required|integer|min:1'
        ]);

        $commentLike = CommentLike::create($attributes);

        return redirect('/highlights/s/' . $highlight->slug)->with('succes', 'Uw like is succesvol geplaatst!');
    }
}
