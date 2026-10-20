<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    // READ: Display all students
    public function index()
    {
        $students = Student::latest()->get(); //Retrieves all students, newest first
        return view('students.index', compact('students')); //view() displays a selected Blade template 
    }

    // CREATE: Show the form
    public function create()
    {
        return view('students.create');
    }

    // CREATE: Save a new student
    public function store(Request $request)
    {
        $validated = $request->validate([ //$request->validate() validates user input 
        'student_number' => 'required|string|max:50|unique:students,student_number',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:students,email',
        'course' => 'required|string|max:255',
        ]);
        Student::create($validated); //Student::create() Inserts a student record
        return redirect()->route('students.index')
            ->with('success', 'Student added successfully!');
    }

    // READ: Display a specific student
    public function show(Student $student) //Student $student Uses route model binding to retrieve a student 
    {
        return view('students.show', compact('student'));
    }

    // UPDATE: Show the edit form
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // UPDATE: Save changes
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_number' => [
                'required',
                'string',
                'max:50',
                Rule::unique('students', 'student_number')->ignore($student->id),
            ],
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('students', 'email')->ignore($student->id),
        ],
        'course' => 'required|string|max:255',
        ]);
        $student->update($validated); //$student->update() Updates an existing record

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully!'); //with('success', ...) Stores a temporary success message in the session 
    }
    
    // DELETE: Remove a student
    public function destroy(Student $student)
    {
        $student->delete(); //$student->delete() Deletes a record 

        return redirect()->route('students.index') //redirect()->route() Redirects to a named route
            ->with('success', 'Student deleted successfully!');
    }
}
