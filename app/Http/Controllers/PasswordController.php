<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //
    public function index()
    {
        return view('admin.password.index', [
            'tittle' => 'Change Password'
        ]);
    }
}
