<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function show($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        return response()->json($student);
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

        $student = Student::create($validatedData);

        return response()->json($student, 201);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $validatedData = $request->validate([
            'firstName' => 'string',
            'lastName' => 'string',
            'email' => 'email|unique:students,email,' . $id,
            'phoneNumber' => 'string',
            'password' => 'string',
        ]);

        $student->update($validatedData);

        return response()->json($student);
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student->delete();

        return response()->json(['message' => 'Student deleted successfully']);
    }
}