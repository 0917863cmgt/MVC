<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Follower;
use App\Models\Highlight;
use App\Models\Statistic;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user){
        return view('profile.show', [
            'user' => $user,
            'highlights' => Highlight::where('user_id', $user->id)->paginate(3),
            'statistic' => Statistic::where('user_id', $user->id)->get()->first(),
            'followers' => Follower::where('user_id', $user->id)->get(),
            'follows' => Follow::where('user_id', $user->id)->get(),
        ]);
    }
}
