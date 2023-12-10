<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Student1Controller extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function show($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return view('students.show')->with('message', 'Student not found');
        }

        return view('students.show', compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email|unique:students',
            'phoneNumber' => 'required|string',
            'password' => 'required|string',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $student = Student::create($validatedData);

        return redirect()->route('index')->with('success', 'Student created successfully');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
    }
}
