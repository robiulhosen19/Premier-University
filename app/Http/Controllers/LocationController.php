<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LocationController extends Controller
{
    public function getProgram($departmentID){
        $programs = DB::table('programs')->where('department_id', '=', $departmentID)->get();
        return response()->json([
            'programs' => $programs

        ]);
    }
}
