<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourse;
use App\Models\Lesson;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        $courses = Course::main()->get();
        $reviews = Review::main()->get();
        $totalCourse = Course::count();
        $totalLesson = Lesson::count();
        $learners = UserCourse::learner()->get()->count();
        return view('home', compact('courses', 'reviews', 'totalCourse', 'totalLesson', 'learners'));
    }
}
