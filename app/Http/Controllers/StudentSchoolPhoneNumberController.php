<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentSchoolPhoneNumberController extends Controller
{
  public function index()
  {
    $student = Student::with('school')->with('phoneNumber')->get();
    return $student;
  }
}