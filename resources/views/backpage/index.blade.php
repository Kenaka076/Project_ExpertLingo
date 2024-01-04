@extends('backpage.admintemplate')

@section('title', 'Admin Dashboard')

@section('content-title', 'Dashboard')

@section('content')
    <main class="flex-1 ml-28">
        <div class="bg-blue">
            <div class="mx-auto flex h-screen w-9/12 text-slate-900">
                <div class="py-4">
                    <div class="flex justify-between items-center">
                        <div class="py-5">
                            <a href="{{ route('jadwal.create') }}">
                                <button
                                    class="rounded-lg py-2 px-5 bg-blue-600 text-slate-200 hover:bg-slate-500 hover:text-blue-400">Tambah</button>
                            </a>
                        </div>
                        <div class="my-4">
                            <form action="{{ route('jadwal.index') }}" method="GET" class="flex rounded-lg mb-4">
                                <input type="text" name="search" placeholder="Search" class="mr-2 rounded-lg text-center" value="{{ $searchTerm ?? '' }}">
                                <button type="submit" class="bg-blue-600 text-slate-200 py-2 px-4 hover:bg-slate-500 hover:text-blue-400 rounded-lg">Search</button>
                            </form>
                            
                        </div>
                    </div>

                    <table class="table-fixed bg-white border rounded-lg border-gray-300 mt-3">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Guru</th>
                                <th class="py-2 px-4 border-b">Student</th>
                                <th class="py-2 px-4 border-b">Mulai</th>
                                <th class="py-2 px-4 border-b">Selesai</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($jadwals as $jadwal)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $jadwal->nama_guru }}</td>
                                    <td class="py-2 px-4 border-b">{{ $jadwal->nama_student }}</td>
                                    <td class="py-2 px-4 border-b">{{ $jadwal->jam_mulai }}</td>
                                    <td class="py-2 px-4 border-b">{{ $jadwal->jam_selesai }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('jadwal.edit', $jadwal->id) }}"
                                            class="bg-blue-600 text-white py-1 px-2 rounded-lg hover:bg-blue-500s">Edit</a>
                                        <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="post"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-600 text-white py-1 px-2 rounded-lg hover:bg-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="my-4 mb-14">
                        {{-- Pagination links --}}
                        {{ $jadwals->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>

@endsection
