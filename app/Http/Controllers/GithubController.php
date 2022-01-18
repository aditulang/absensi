<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    public function handleProviderCallback(Request $request)
    {
        if(!$request->has('code') || $request->has('denied')){
            return redirect('/');
        }
        $socialUser = Socialite::driver('github')->user();
        $user = User::where('github_id', $socialUser->getID())->first();
        if(!$user)
        User::create([
            'name' => $githubUser->name,
            'eamil' => $githubUser->email,
            'github_id' => $githubUser->id,
            'avatar' => $githubUser->avatar,
            'password' => encrypt('12345dummy'),
        ]);
        Auth::login($user);
        return redirect('/home');
    }
}
