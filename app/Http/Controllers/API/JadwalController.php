<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Student;
use App\Models\Guru;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        $query = Jadwal::query();

        // Check if a search term is provided
        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Modify the query to filter based on your search criteria
            $query->where('nama_guru', 'like', '%' . $searchTerm . '%')
                ->orWhere('nama_student', 'like', '%' . $searchTerm . '%')
                ->orWhere('jadwal', 'like', '%' . $searchTerm . '%')
                ->orWhere('jam_mulai', 'like', '%' . $searchTerm . '%')
                ->orWhere('jam_selesai', 'like', '%' . $searchTerm . '%');
        }

        // Paginate the results
        $jadwals = $query->paginate(10);

        // Pass the search term to the view for display or pagination links
        $searchTerm = $request->input('search');

        return response()->json(['jadwals' => $jadwals, 'searchTerm' => $searchTerm]);
    }

    public function create()
    {
        $gurus = Guru::all();
        $students = Student::all();

        return response()->json(['gurus' => $gurus, 'students' => $students]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id_guru' => 'required|exists:guru,id',
            'id_student' => 'required|exists:students,id',
            'jadwal' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        // Retrieve the guru's and student's names
        $nama_guru = Guru::findOrFail($request->id_guru)->nama_guru;
        $nama_student = Student::findOrFail($request->id_student)->firstName;

        // Create a new Jadwal instance with the guru's and student's names
        $jadwal = Jadwal::create([
            'id_guru' => $request->id_guru,
            'id_student' => $request->id_student,
            'nama_guru' => $nama_guru,
            'nama_student' => $nama_student,
            'jadwal' => $request->jadwal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ]);

        // Return a JSON response
        return response()->json(['message' => 'Jadwal created successfully', 'data' => $jadwal]);
    }

    public function edit(Jadwal $jadwal)
    {
        $gurus = Guru::all();
        $students = Student::all();

        return response()->json(['jadwal' => $jadwal, 'gurus' => $gurus, 'students' => $students]);
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        // Validate the request data
        $request->validate([
            'id_guru' => 'required|exists:guru,id',
            'id_student' => 'required|exists:students,id',
            'jadwal' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        // Retrieve the guru's and student's names
        $nama_guru = Guru::findOrFail($request->id_guru)->nama_guru;
        $nama_student = Student::findOrFail($request->id_student)->firstName;

        // Update the Jadwal instance with the guru's and student's names
        $jadwal->update([
            'id_guru' => $request->id_guru,
            'id_student' => $request->id_student,
            'nama_guru' => $nama_guru,
            'nama_student' => $nama_student,
            'jadwal' => $request->jadwal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ]);

        // Return a JSON response
        return response()->json(['message' => 'Jadwal updated successfully', 'data' => $jadwal]);
    }

    public function destroy(Jadwal $jadwal)
    {
        // Delete the Jadwal instance
        $jadwal->delete();

        // Return a JSON response
        return response()->json(['message' => 'Jadwal deleted successfully']);
    }
}
