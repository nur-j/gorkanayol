<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('name', 'password');
        $remember = $request->remember === 'on';
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('error', 'Неверное имя или пароль');
        }
    }
}
