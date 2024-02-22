<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.dashboard.blogs.index', [
            'tittle' => 'Blogs',
            'blogs' => Blog::where('user_id', auth()->user()->id)->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.dashboard.blogs.create', [
            'tittle' => 'Create new posts',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request->file('image')->store('thumbnails');

        $validateData = $request->validate([
            'image' => 'image|file|max:1024',
            'tittle' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('thumbnails');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 5);

        Blog::create($validateData);

        return redirect('/admin/dashboard/blogs')->with('status', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        return view('admin.dashboard.blogs.show', [
            'tittle' => 'Blog',
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        return view('admin.dashboard.blogs.edit', [
            'tittle' => 'Create new posts',
            'blog' => $blog,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
        $rules = [
            'image' => 'image|file|max:1024',
            'tittle' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
        ];


        if ($request->slug != $blog->slug) {
            $rules['slug'] = 'required|unique:blogs';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('thumbnails');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 5);

        Blog::where('id', $blog->id)
            ->update($validateData);

        return redirect('/admin/dashboard/blogs')->with('status', 'c');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        if ($blog->image) {
            Storage::delete($blog->image);
        }
        Blog::destroy($blog->id);
        return redirect('/admin/dashboard/blogs')->with('status', 'Post has been successfully deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->tittle);
        return response()->json(['slug' => $slug]);
    }
}
