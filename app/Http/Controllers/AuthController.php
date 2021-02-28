<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
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
        if (User::all()->count() > 0)
        {
            return redirect()->intended('dashboard');
        }

        return view('auth.setup');
    }

    public function setup_post(Request $request): \Illuminate\Http\RedirectResponse
    {
        if (User::all()->count() > 0)
        {
            return redirect()->intended('dashboard');
        }

        $request->validate([
            'language' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->name = 'Admin';
        $user->password = Hash::make($request->password);
        $user->save();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    }
}
