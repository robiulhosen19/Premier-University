<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard(){
    return view('admin.pages.dashboard');
   }
   public function profile(){
    return view('admin.pages.profile');
   }
}
