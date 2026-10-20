<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model //'class Student extends Model' allows the Student class to interact with the database (in this case. SQL using the 'students' table) using Laravel Eloquent.
{
    protected $fillable = [ //'$fillable' specifies which fields can be assigned through mass assignment. 
        'student_number',
        'first_name',
        'last_name',
        'email',
        'course',
    ];
}

//Laravel now automatically associates the 'Student' model with the 'students' table in the migrations folder, following its naming convention.
