<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $show = Contact::All();
        return view('admin.pages.pages-contact',compact('show'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            $obj = new Contact();
            $obj->first_name = $request->first_name;
            $obj->last_name = $request->last_name;
            $obj->email = $request->email;
            $obj->phone = $request->number;
            $obj->text = $request->text;
            if($obj->save());
            Session::flash('msg', 'successfully inserted');
        return redirect()->back();
               
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
