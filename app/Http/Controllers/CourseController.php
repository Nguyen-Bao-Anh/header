<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order_by = $request->order_by??"1"; //1:ASC 2 DESC
        $search = $request->search??"";
        // $courses = DB::table('Courses')->where('name','LIKE','%'.$search.'%')->get();
        // $courses = Course::where('name','LIKE','%'.$search.'%')->get();
        // $query = Course::where('name','LIKE','%'.$search.'%');
        // if($order_by == 1){
        //     $query = $query->orderBy('name');
        // }else{
        //     $query = $query->orderBy('name','DESC');
        // }
        // $courses = $query->get();
        $data = $request->all();
        $courses = Course::search($data)->paginate(4);
        $teachers = User::teachers()->get();
        $tags = Tag::all();
        return view('course', compact('courses','search','teachers','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
