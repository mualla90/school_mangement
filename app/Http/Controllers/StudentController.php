<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::query()->get();
        return $this->successResponse($students,'All students');
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
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
     public function syncStudents(Request $request,Course $course){
        $validate=$request->validate([
            'students'=>['required','array'],
            'students.*'=>['integer','exists:students,id'],
        ]);
        $course->students()->sync($validate['students']);
        return $this->successResponse($course->load('students'),'student synced successfully');
    }
}
