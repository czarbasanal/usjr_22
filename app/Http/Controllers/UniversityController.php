<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use App\Models\Department;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = Student::all();
        return view('students.all', compact('students'));
    }

    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function showColleges()
    {
        $colleges = College::with('programs')->get();
        return view('colleges.all', compact('colleges'));
    }

    public function showCollege($id)
    {
        $college = College::with('departments', 'programs')->findOrFail($id);
        return view('colleges.show', compact('college'));
    }

    public function showDepartments()
    {
        $departments = Department::with('college')->paginate(5);
        return view('departments.all', compact('departments'));
    }
}
