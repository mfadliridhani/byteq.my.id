<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.dashboard.account.index', [
            'tittle' => 'Account',
            'subtittle' => 'All Account',
            'accounts' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.dashboard.account.create', [
            'tittle' => 'Account',
            'subtittle' => 'Add New Account',
            'accounts' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccountRequest $request)
    {
        //
        $data = $request->validated();
        User::create($data);
        return redirect('/admin/dashboard/accounts')->with('status', 'New account has been created.');

        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $account)
    {
        //
        return view('admin.dashboard.account.edit', [
            'tittle' => 'Account',
            'subtittle' => 'Edit Account',
            'account' => $account,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountRequest $request, User $account)
    {
        //
        $data = $request->validated();
        User::where('id', $account->id)->update($data);
        return redirect('/admin/dashboard/accounts')->with('status', 'Account has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $account)
    {
        //
        User::destroy($account->id);
        return redirect()->back()->with('status', 'Account has been deleted!');
    }
}
