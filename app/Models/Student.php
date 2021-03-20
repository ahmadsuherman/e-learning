<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;

class Student extends Model
{
    protected $primaryKey = 'stu_id';
    const CREATED_AT = 'stu_created_at';
    const UPDATED_AT = 'stu_updated_at';
    const DELETED_AT = 'stu_deleted_at';
    protected $guarded = [];

    public function student_classes()
    {
        return $this->hasMany(StudentClass::class, 'stc_student_id')->where('stc_is_active', 1);
    }
    public static function getListStudents($request)
    {
        $students = Student::join('users', 'students.stu_user_id', '=', 'users.usr_id')->select('users.usr_name', 'users.usr_profile_picture', 'stu_id', 'stu_nis', 'stu_is_active');
        return $students;
    }
}
