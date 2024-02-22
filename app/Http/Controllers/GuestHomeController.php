<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class GuestHomeController extends Controller
{
    //
    public function index()
    {
        //
        return view('guest.home.index', [
            'tittle' => 'Home',
            'homes' => Home::all()
        ]);
    }
}
