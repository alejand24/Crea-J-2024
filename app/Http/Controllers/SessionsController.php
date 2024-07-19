<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {

        $credentials = $request->getCredentials();

        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home');
            }
        } else {

            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ])->withInput();
        }
    }
}
