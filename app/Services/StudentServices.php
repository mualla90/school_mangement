<?php
namespace App\Services;

use App\Models\Course;
use App\Models\Student;

class StudentServices{

    public function getAllStudents()
    {
         return Student::query()->get();
    }

    public function syncStudentsToCourse(Course $course,array $studentsIds){
        $course->students()->sync($studentsIds);
        return $course->load('students');
    }
}

?>
