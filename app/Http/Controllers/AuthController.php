<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    // @TODO: Determine how we handle registration
    public function register()
    {
        return view('auth.register');
    }

    public function setup()
    {
        return view('auth.setup');
    }

    public function setup_post(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'language' => 'required',
            'themeColor' => ''
        ]);

        return redirect()->intended('dashboard');
    }
}
