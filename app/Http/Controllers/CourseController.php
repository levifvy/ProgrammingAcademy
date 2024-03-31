<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Team;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourse;

use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('name', 'asc')->paginate(50);
        return view('courses.index', compact('courses'));
    }
    
    public function create(){
        $categories = Category::all();
        Category::pluck('name', 'id');
        return view('courses.create', compact('categories'));
    }
    
    public function store(StoreCourse $request)
    {
        $validatedData = $request->validated();
        $course = new Course();
        $course->category_id = $validatedData['category_id'];
        $course->name = $validatedData['name'];
        $course->description = $validatedData['description'];
        $course->slug = Str::slug($validatedData['name']);
        $course->save();
        return redirect()->route('courses.show', $course);
    }
    
    public function show(Course $course){
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course){
        $categories = Category::all();
        Category::pluck('name', 'id');
        $courses = Course::all();
        Course::pluck('name', 'id');
        return view('courses.edit', compact('course', 'categories', 'courses'));
    }

    public function update(Request $request, Course $course){
        $course->category_id = $request->category_id;
        $course->name = $request->name;
        $course->description = $request->description;
    
        $course->save();

        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course){
        $course->delete();
        return redirect()->route('courses.index');
    }

    public function storeResults(Request $request)
    {
        $rules = [
            'course_id1' => 'required|exists:courses,id',
            'category_id1' => 'required|exists:categories,id',
            'goals1' => 'integer',
            'fouls_commited1' => 'integer',
            'fouls_received1' => 'integer',
            'red_cards1' => 'integer',
            'yellow_cards1' => 'integer',
            'course_id2' => 'required|exists:courses,id',
            'category_id2' => 'required|exists:categories,id',
            'goals2' => 'integer',
            'fouls_commited2' => 'integer',
            'fouls_received2' => 'integer',
            'red_cards2' => 'integer',
            'yellow_cards2' => 'integer',
        ];

        $validatedData = $request->validate($rules);

        $course1 = Course::find($validatedData['course_id1']);
        $course2 = Course::find($validatedData['course_id2']);

        // Increment course1 stats
        $course1->goals += $validatedData['goals1'];
        $course1->fouls_commited += $validatedData['fouls_commited1'];
        $course1->fouls_received += $validatedData['fouls_received1'];
        $course1->red_cards += $validatedData['red_cards1'];
        $course1->yellow_cards += $validatedData['yellow_cards1'];
        $course1->match_results += $this->calculateMatchResult($validatedData['goals1'], $validatedData['goals2']);
        $course1->score = $this->calculateScore($course1);
        $course1->save();

        // Increment course2 stats
        $course2->goals += $validatedData['goals2'];
        $course2->fouls_commited += $validatedData['fouls_commited2'];
        $course2->fouls_received += $validatedData['fouls_received2'];
        $course2->red_cards += $validatedData['red_cards2'];
        $course2->yellow_cards += $validatedData['yellow_cards2'];
        $course2->match_results += $this->calculateMatchResult($validatedData['goals2'], $validatedData['goals1']);
        $course2->score = $this->calculateScore($course2);
        $course2->save();

        return redirect()->route('results.index')->with('success', 'Results created successfully');
    }

    private function calculateMatchResult($goals1, $goals2)
    {
        if ($goals1 > $goals2) {
            return 1; // Course 1 wins
        } elseif ($goals1 < $goals2) {
            return -1; // Course 2 wins
        } else {
            return 0; // Draw
        }
    }

    private function calculateScore($course)
    {
        return ($course->goals * 5) - ($course->fouls_commited * 2) - ($course->red_cards * 4) - ($course->yellow_cards * 3) + ($course->match_results * 10);
    }

}
