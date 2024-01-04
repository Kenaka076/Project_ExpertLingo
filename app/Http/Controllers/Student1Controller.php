<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Student1Controller extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $students = Student::when($searchTerm, function ($query) use ($searchTerm) {
            $query->where('firstName', 'like', '%' . $searchTerm . '%')
                ->orWhere('lastName', 'like', '%' . $searchTerm . '%')
                ->orWhere('email', 'like', '%' . $searchTerm . '%')
                ->orWhere('phoneNumber', 'like', '%' . $searchTerm . '%');
        })->paginate(10);
    
        return view('backpage.student', compact('students', 'searchTerm'));
    }
    


    public function show($id)
    {
        $students = Student::find($id);

        if (!$students) {
            return view('student.show')->with('message', 'Student not found');
        }

        return view('students.show', compact('students'));
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
