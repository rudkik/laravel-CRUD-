<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Student(){

        $student = Student::all();

        return view('student', [
            "students"=> $student
        ]);
    }
}
