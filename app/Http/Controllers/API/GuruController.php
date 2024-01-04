<?php
// GuruController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $query = Guru::query();

        // Check if a search term is provided
        if ($request->has('search')) {
            $searchTerm = $request->input('search');

            // Modify the query to filter based on your search criteria
            $query->where('nama_guru', 'like', '%' . $searchTerm . '%')
                ->orWhere('phoneNumber', 'like', '%' . $searchTerm . '%');
        }

        // Paginate the results
        $gurus = $query->paginate(10);

        return response()->json($gurus);
    }

    public function show(Guru $guru)
    {
        return response()->json($guru);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_guru' => 'required|string',
            'phoneNumber' => 'required|string',
        ]);

        $guru = Guru::create($validatedData);

        return response()->json($guru);
    }

    public function update(Request $request, Guru $guru)
    {
        $validatedData = $request->validate([
            'nama_guru' => 'required|string',
            'phoneNumber' => 'required|string',
        ]);

        $guru->update($validatedData);

        return response()->json($guru);
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();

        return response()->json(['message' => 'Guru deleted successfully']);
    }
}
