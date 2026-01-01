<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Services\StudentServices;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected StudentServices $studentServices;
    public function __construct(StudentServices $studentServices){
        $this->students=$studentServices;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->successResponse($this->studentServices->getAllStudents(),'All students');
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


}
