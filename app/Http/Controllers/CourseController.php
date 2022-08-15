<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Tag;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $courses = Course::search($data)->paginate(config('course.paginate'));
        $teachers = User::teachers()->get();
        $tags = Tag::all();

        return view('course')->with(compact('courses', 'teachers', 'tags', 'data'));
    }
}
