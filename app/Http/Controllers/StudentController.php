<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function students()
    {

        $students = \App\Models\Students::all();
        return view('students', ['students' => $students]);
        // return $students;
        // return view('students');
    }
}
