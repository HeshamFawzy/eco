<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->method() == 'POST') {
            $credentials = $request->only('email', 'password');

            if (auth('admin')->attempt($credentials, request('remember'))) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }
            return redirect()->back()->with('danger', 'email or password is incorrect');
        } else {
            return view('dashboard.auth.login');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('dashboard.login');
    }
}
