<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\StoreCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course=Course::create($request->validated());
        return $this->successResponse($course,'course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $studentsWithCourse=$course->load('students');
        return $this->successResponse($studentsWithCourse,'all student in the course');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $courses)
    {
        //
    }
   
}
