<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestResumeController extends Controller
{
    //
    public function index()
    {
        //
        return view('guest.resume.index', [
            'tittle' => 'Resume'
        ]);
    }
}
