<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($validated, $request->get('remember_me'))) {
            $request->session()->regenerate();

            return to_route('dashboard');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login-page');
    }
}
