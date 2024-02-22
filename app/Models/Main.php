<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Main
{
    private static $main = [
        'tittle' => 'Home',
        'name' => 'M Fadli Ridhani',
        'age' => 25,
        'address' => 'Jl. Kerto Rahayu No. 57, Malang',
        'image' => 'guest/assets/favicon_io/android-chrome-512x512.png',
        'favicon' => 'guest/assets/favicon_io/favicon.ico',
        'index' => 'http://project-laravel-1.test/',
        'resume' => 'http://project-laravel-1.test/resume',
        'projects' => 'http://project-laravel-1.test/projects',
        'blogs' => 'http://project-laravel-1.test/blogs',
        'contact' => 'http://project-laravel-1.test/contact',
        'descriptions' => Home::all()
    ];

    public static function all()
    {
        return collect(self::$main);
    }
}
