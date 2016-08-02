<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Socialite;

class SocialController extends Controller
{

    public function getSocialLogin($social = null)
	{
	    return Socialite::driver($social)->redirect();
	}
	public function getSocialAuthCallback($social = null, Request $request)
	{
	    $user = Socialite::driver($social)->user();
	    $request->session()->put('token', $user->token);
	    $request->session()->put('id', $user->id);
	    $request->session()->put('email', $user->email);
	    $request->session()->put('name', $user->name);
	    $request->session()->put('nickname', $user->nickname);
	    $request->session()->put('avatar', $user->avatar);
	    return redirect('/');
	}
}
