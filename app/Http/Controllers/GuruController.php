<?php

namespace App\Http\Controllers;

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

        // Pass the search term to the view for display or pagination links
        $searchTerm = $request->input('search');

        return view('backpage.guru', compact('gurus', 'searchTerm'));
    }
    public function create()
    {
        return view('backpage.addguru');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_guru' => 'required|string',
            'phoneNumber' => 'required|string',
        ]);

        Guru::create($validatedData);

        return redirect()->route('guru.index')->with('success', 'Guru created successfully');
    }

    public function edit(Guru $guru)
    {
        return view('backpage.editguru', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $validatedData = $request->validate([
            'nama_guru' => 'required|string',
            'phoneNumber' => 'required|string',
        ]);

        $guru->update($validatedData);

        return redirect()->route('guru.index')->with('success', 'Guru updated successfully');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru deleted successfully');
    }
}
