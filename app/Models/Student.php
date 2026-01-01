<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'birthday',
        'user_id',
    ];
    public function teachers(){
        return $this->belongsToMany(Teacher::class,'teacher_student','student_id','teacher_id');
    }
    public function courses(){
        return $this->belongsToMany(Course::class,'course_student','student_id','course_id');
    }


}
