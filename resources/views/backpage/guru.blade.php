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
                            <a href="{{ route('guru.create') }}">
                                <button
                                    class="rounded-lg py-2 px-5 bg-blue-600 text-slate-200 hover:bg-slate-500 hover:text-blue-400">Tambah</button>
                            </a>
                        </div>
                        <div class="my-4">
                            <form action="{{ route('guru.index') }}" method="GET" class="flex rounded-lg">
                                <input type="text" name="search" placeholder="Search" class="mr-2 rounded-lg text-center" value="{{ $searchTerm ?? '' }}">
                                <button type="submit" class="bg-blue-600 text-slate-200 py-2 px-4 hover:bg-slate-500 hover:text-blue-400 rounded-lg">Search</button>
                            </form>
                        </div>
                    </div>

                    <table class="table-fixed bg-white border rounded-lg border-gray-300 mt-3 ">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Guru</th>
                                <th class="py-2 px-4 border-b">Telepon</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($gurus as $guru)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $guru->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $guru->nama_guru }}</td>
                                    <td class="py-2 px-4 border-b">{{ $guru->phoneNumber }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('guru.edit', $guru->id) }}"
                                            class="bg-blue-600 text-white py-1 px-2 rounded-lg hover:bg-blue-500">Edit</a>
                                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST"
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
                        {{ $gurus->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>

@endsection
