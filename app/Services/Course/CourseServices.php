<?php
namespace App\Services\Course;

use App\Models\Course;

class CourseServices{

    public function addCourse($data){
        $course=Course::create($data);
        return $course;
    }

    public function getCourse(Course $course){
        return $course->load('students');
    }
}
?>
