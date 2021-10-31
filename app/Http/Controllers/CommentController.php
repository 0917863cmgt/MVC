<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Highlight;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // index show create store edit update destroy
    public function store(Highlight $highlight){
        $attributes = request()->validate([
            'highlight_id' => 'required|integer|min:1',
            'user_id' => 'required|integer|min:1',
            'body' => 'required|string|min:1|max:255'
        ]);

        $comment = Comment::create($attributes);

        return redirect('/highlights/s/'.$highlight->slug)->with('succes', 'Uw opmerking is succesvol geplaatst!');
    }
}
