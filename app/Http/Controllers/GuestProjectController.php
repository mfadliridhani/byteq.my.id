<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestProjectController extends Controller
{
    //
    public function index()
    {
        //
        return view('guest.project.index', [
            'tittle' => 'Project'
        ]);
    }
}
