<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        return view('website.pages.home');
        
    }

    public function admission() {
        return view('website.pages.admissions.create');
        
    }

    public function about() {
        return view('website.pages.admission');
        
    }

    public function course() {
        return view('website.pages.course');        
    }
  
}
