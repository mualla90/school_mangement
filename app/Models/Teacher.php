<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'age',
        'user_id',
    ];
    public function students(){
        return $this->belongsToMany(Student::class,'teacher_student','teacher_id','student_id',);
    }
    public function courses(){
        return $this->hasMany(Course::class,'teacher_id');
    }
}
