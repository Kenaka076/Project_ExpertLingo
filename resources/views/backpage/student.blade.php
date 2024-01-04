@extends('backpage.admintemplate')

@section('title', 'Admin Dashboard')

@section('content-title', 'Dashboard')

@section('content')
    <main class="flex-1 ml-28">
        <div class="bg-blue">
            <div class="mx-auto flex h-screen w-9/12 text-slate-900">
                <div class="py-4">
                    <div class="flex justify-between items-center">
                        <div class="my-4">
                            <form action="{{ route('student.index') }}" method="GET" class="flex rounded-lg">
                                <input type="text" name="search" placeholder="Search"
                                       class="mr-2 rounded-lg text-center" value="{{ $searchTerm ?? '' }}">
                                <button type="submit" class="bg-blue-600 text-slate-200 py-2 px-4 hover:bg-slate-500 hover:text-blue-400 rounded-lg">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>

                    <table class="table-fixed bg-white border rounded-lg border-gray-300 mt-3 ">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Nama</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Telepon</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $student->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $student->firstName }} {{ $student->lastName }}</td>
                                    <td class="py-2 px-4 border-b">{{ $student->email }}</td>
                                    <td class="py-2 px-4 border-b">{{ $student->phoneNumber }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div class="my-4 mb-14">
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </body>

@endsection