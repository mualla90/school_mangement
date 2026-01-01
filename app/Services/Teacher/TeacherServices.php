<?php
namespace App\Services\Teacher;

use App\Models\Teacher;

class TeacherServices{
    public function getAllTeachers(){
        return Teacher::query()->get();
    }
    public function getTeacherWithCourses(Teacher $teacher){
        return $teacher->load('courses');
    }
}
?>
