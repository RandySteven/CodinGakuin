<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Type;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create(){
        $categories = Category::get();
        $types = Type::get();
        return view('course.create', compact('categories', 'types'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:50',
            'price' => 'required',
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:2048',
            'desc' => 'required'
        ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        $attr['thumbnail'] = $request->file('thumbnail')->store("images/courses");
        $attr['type_id'] = $request->get('type_id');
        $attr['category_id'] = $request->get('category_id');

        if($attr['type_id']==1&&$request->price!=0){
            return back()->with('error', 'Free price is 0');
        }else{
            auth()->user()->courses()->create($attr);
            return redirect('/courses')->with('success', 'Course Create Success full');
        }
    }

    public function show(Course $course){
        return view('course.show', compact('course'));
    }
}
