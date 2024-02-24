<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardContactContrlloer extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.dashboard.contact.index', [
            'tittle' => 'Contacts',
            'subtittle' => 'All Contact',
            'contacts' => Contact::all(),
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
        return view('admin.dashboard.contact.show', [
            'tittle' => 'Contacts',
            'subtittle' => 'Contact Detail',
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
        return view('admin.dashboard.contact.edit', [
            'tittle' => 'Contacts',
            'subtittle' => 'Edit Contact',
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
        Contact::where('id', $contact->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);

        return redirect('/admin/dashboard/contacts')->with('status', 'Contact has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        Contact::destroy($contact->id);
        return redirect()->back()->with('status', 'Contact has been successfully deleted!');
    }
}
