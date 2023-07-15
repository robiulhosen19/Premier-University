<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course() {
        return view('website.pages.course');
        
    }

    public function show() {
        $show = Course::All();
        return view('website.pages.course',compact('show'));
        
    }
    public function create() {
        
        return view('admin.pages.course');
        
    }
    public function store(Request $request) {
        
        $obj = new Course();
        $obj->price = $request->price;
        $obj->catagory = $request->titel;
        $obj->text = $request->text;
        if($request->file('file'))
        {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/', $filename);
            $obj->d_image = $request->file;

        }
        dd($obj);
        if($obj->save());
        return redirect()->back()->with('msg', 'successfully inserted');
           
        
    }
    





    
}
