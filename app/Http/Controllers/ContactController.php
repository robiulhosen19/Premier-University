<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('website.pages.contact ');
    }
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
    public function show()  {

        $show = Contact::All();
        return view('admin.pages.pages-contact',compact('show'));
    }



    public function delete($id){
        $obj = Contact::find($id);
        $obj->delete();
        Session()->flash('msg', 'successfully Deleted');
        return redirect()->back();
    }
}
