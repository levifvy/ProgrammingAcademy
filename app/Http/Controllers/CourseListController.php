<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Team;
use App\Models\Category;
use App\Http\Requests\StoreCourse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CourseListController extends Controller
{
    
    public function all(){

        $courses = Course::all();

        return view('courses.all', compact('courses'));
    }
}
