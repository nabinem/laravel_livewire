<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //dd(Course::search($request->search)->orderBy('pinned', 'desc')->raw());
        $courseQuery = Course::search($request->search)
            ->orderBy('pinned', 'desc');

        //$courseQuery->where('pinned', 1);
        $courseQuery->orderBy('pinned', 'desc');

        $courses = $courseQuery->get();

        return view('courses.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.add_edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->fill($request->all());
        $course->pinned = $request->pinned ??= 0;

        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
