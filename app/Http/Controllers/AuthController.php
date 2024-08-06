<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Flasher\Toastr\Prime\ToastrInterface;

class AuthController extends Controller {
    public function showRegistrationForm() {
        return view('auth.register');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'company' => 'required',
            'phone' => 'required',
            'sector' => 'required',
        ]);

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'company' => $validated['company'],
            'phone' => $validated['phone'],
            'sector' => $validated['sector'],
        ]);

        Auth::login($user);

        toastr()->timeOut(10000)->closeButton()->addSuccess('New User Registered Successfully');

        //return redirect()->route('assessment.start');
        return redirect()->route('assessment.explanation');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            //return redirect()->intended('assessment.start');
            toastr()->timeOut(10000)->closeButton()->addSuccess('User Logged In Successfully');
            return redirect()->intended('assessment.explanation');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
