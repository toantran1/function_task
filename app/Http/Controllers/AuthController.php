<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function dashboard() {
        return view('apps_kanban');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function adminRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect('/admin/dashboard');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return response()->view('admin.login')->header('Cache-Control', 'no-cache, no-store, must-revalidate');
    }
}
