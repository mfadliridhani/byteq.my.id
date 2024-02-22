<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('admin.register.index', [
            'tittle' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|min:5|max:255|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        User::create($validateData);

        $request->session()->flash('status', 'Registration successfull! Please login');

        return view('admin/login/index', [
            'tittle' => 'Login',
        ]);
    }
}
