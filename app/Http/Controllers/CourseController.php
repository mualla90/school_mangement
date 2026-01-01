<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Services\Course\CourseServices;
use App\Services\StudentServices;
use Illuminate\Http\Request;
use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Student\SyncStudentRequest;

class CourseController extends Controller
{

        protected StudentServices $studentServices;
        protected CourseServices $courseServices;
        public function __construct(StudentServices $studentServices,CourseServices $courseServices){
            $this->students=$studentServices;
            $this->courseServices=$courseServices;
        }
        public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $validatedData=$request->validated();
        $course=$this->courseServices->addCourse($validatedData);
        return $this->successResponse($course,'course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $studentsWithCourse=$this->courseServices->getCourse($course);
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
   public function syncStudents(SyncStudentRequest $request,Course $course){
        $validate=$request->validated();
        $updateCourse=$this->studentServices->syncStudentsToCourse($course,$validate['students']);
        return $this->successResponse($updateCourse,'student synced successfully');
    }
}
