<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $students = Student::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%$search%")
                ->orWhere('student_id', 'like', "%$search%");
        })->get();

        return view('students.index', compact('students', 'search'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'student_id' => 'required|unique:students',
            'course' => 'required',
            'year' => 'required',
            'email' => 'required|email|unique:students,email',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ], [
            'student_id.unique' => 'Student ID already exists.',
            'email.unique' => 'Email already exists.'
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('students', 'public');
        }

        Student::create($validated);

        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required',
            'student_id' => 'required|unique:students,student_id,' . $student->id,
            'course' => 'required',
            'year' => 'required',
            'email' => 'required|email',
            'photo' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('students', 'public');
        }

        $student->update($data);

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
