<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.dashboard.home.index', [
            'tittle' => 'Home',
            'subtittle' => 'Your Home',
            'homes' => Home::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
        return view('admin.dashboard.home.edit', [
            'tittle' => 'Edit Home',
            'home' => $home,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
        Home::where('id', $home->id)
            ->update([
                'description_i_can_help' => $request->description_i_can_help,
                'description_get_online_and' => $request->description_get_online_and,
                'resume' => $request->resume,
                'projects' => $request->projects,
                'name' => $request->name,
                'description_about_me' => $request->description_about_me,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'github' => $request->github,
            ]);

        return redirect('/admin/dashboard/homes')->with('status', 'Home has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
