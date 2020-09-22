<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show(){

        $courses=Course::all();
        return view('Courses')->with('courses',$courses);
    }
    //
}
