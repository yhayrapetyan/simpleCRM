<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordRecoveryController extends Controller
{
    public function SendRecoveryLink(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ]);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
    public function showResetForm($token, $email)
    {
        return view('auth.password-reset', ['token' => $token, 'email' => $email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', $status);
        } else {
            return back()->withInput($request->only('email'))->withErrors(['email' => $status]);
        }
    }
}
