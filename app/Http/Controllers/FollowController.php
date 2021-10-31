<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Follower;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class FollowController extends Controller
{
    public function store(){
        $attributes = request()->validate([
            'user_id' => 'required|integer|min:1' ,
            'follow_id' => 'required|integer|min:1',
            'follower_id' => 'required|integer|min:1'
        ]);

        if($attributes['user_id'] === $attributes['follow_id']){
            return back()->with('fail', 'Uw follow kan niet geplaatst worden. :(');
        } else {
            if(Follow::where('user_id', '=', $attributes['user_id'])->where('follow_id', '=', $attributes['follow_id'])->exists()
                && Follower::where('user_id', '=', $attributes['follow_id'])->where('follower_id', '=', $attributes['user_id'])->exists() ){
                return redirect()->back()->with('fail', 'Uw follow bestaat al');
            } else {
                if(Follow::where('user_id', '=', $attributes['user_id'])->where('follow_id', '=', $attributes['follow_id'])->doesntExist()){
                    $follow = Follow::create([
                        'user_id' => $attributes['user_id'],
                        'follow_id' => $attributes['follow_id']
                    ]);
                }

                if(Follower::where('user_id', '=', $attributes['follow_id'])->where('follower_id', '=', $attributes['user_id'])->doesntExist()){
                    $follower = Follower::create([
                        'user_id' => $attributes['follow_id'],
                        'follower_id' => $attributes['user_id']
                    ]);
                }
                return redirect()->back()->with('succes', 'Uw follow is succesvol aangemaakt');
            }
        }
    }
}
