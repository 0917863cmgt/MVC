<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Highlight $highlight){
        $attributes = request()->validate([
            'highlight_id' => 'required|integer|min:1',
            'user_id' => 'required|integer|min:1'
        ]);

        $like = Like::create($attributes);

        return redirect()->back()->with('succes', 'Uw like is succesvol geplaatst!');
    }

    public function destroy(Highlight $highlight, Like $like){
        Like::destroy($like->id);
        return redirect()->back()->with('succes', 'Uw like is succesvol verwijderd!');
    }
}
