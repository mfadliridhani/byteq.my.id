<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;


class BlogController extends Controller
{
    //
    public function index()
    {
        $tittle = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $tittle = ' by ' . $user->name;
        }
        // dd(request('search'));
        return view('guest/blog/index', [
            'tittle' => 'All post' . $tittle,
            'blogs' => Blog::latest()->filter(request(['search', 'category', 'user']))->with(['user', 'category'])->paginate(3)->onEachSide(1)->withQueryString()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('guest/blog/singlepost', [
            'tittle' => $blog->tittle,
            'blog' => $blog
        ]);
    }
}
