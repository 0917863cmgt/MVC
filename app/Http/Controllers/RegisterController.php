<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        $attributes = request()->validate([
            'role' => 'required|digits_between:0,2|min:1|max:1',
            'first_name' => 'required|string|max:255|min:2',
            'middle_name' => 'nullable|string|max:255|min:2',
            'prefix' => 'nullable|string|max:20|min:1',
            'last_name' => 'required|string|max:255|min:2',
            'email' => 'required|unique:App\Models\User,email|email|max:255',
            'email_confirmation' => 'required|email|max:255|same:email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
            'gender' => 'required|string|max:10|',
            'birthdate' => 'required|date_format:d-m-Y|max:10|min:10',
            'street_name' => 'required|string|min:5|max:50',
            'house_number_and_extension' => 'required|string|min:1|max:5',
            'postal_code' => 'required|string|min:6|max:11',
            'city' => 'required|string|min:4|max:56',
            'country' => 'required|string|min:4|max:56',
            'phone_number' => 'required|string|min:8|max:20',
            'profile_image' => 'nullable|file|size:20000',
            'background_image' => 'nullable|file|size:20000',
            'bio' => 'nullable|string|min:0|max:255'
        ]);
        $user = User::create($attributes);

        Statistic::create([
            'user_id' => $user->id
        ]);

        auth()->login($user);

        return redirect('/')->with('succes', 'Uw account is succesvol aangemaakt!');
    }
}
