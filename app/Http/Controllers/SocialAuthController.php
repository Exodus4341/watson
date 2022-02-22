<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Str;
use Hash;
use Socialite;
use App\Models\User;

class SocialAuthController extends Controller
{
    public function googleLogin(){
        //sends user request to google
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect(){
        //get oauth request back from google to authenticate user
        $user = Socialite::driver('google')->user();

        //if this user doesn't exsist, add them
        //if they do, get the model
        //either way, authenticate the user into the appliation and redirect afterwards
        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'name' => $user->name,
            'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);

        return redirect('/dashboard');

    }


    public function facebookLogin(){
        //sends user request to google
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookRedirect(){
        //get oauth request back from facebook to authenticate user
        $user = Socialite::driver('facebook')->user();

        //if this user doesn't exsist, add them
        //if they do, get the model
        //either way, authenticate the user into the appliation and redirect afterwards
        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'name' => $user->name,
            'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);

        return redirect('/dashboard');
    }

}//END CLASS
