@extends('backpage.admintemplate')

@section('title', 'Admin Dashboard')

@section('content-title', 'Dashboard')

@section('content')
<main class="flex-1 ml-28">
        <div class="bg-blue"> <!-- Hero Section-->
            
            <div class="mx-auto place-content-center h-screen w-9/12 text-slate-900">
                <div class="container w-6/12 ">
                    <h2 class="my-4 text-2xl font-semibold">Create New Guru</h2>
            
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
            
                    <form method="POST" action="{{ route('guru.store') }}" enctype="multipart/form-data">
                        @csrf
            
                        <div class="mb-4">
                            <label for="nama_guru" class="block text-sm font-medium text-gray-700">Nama Guru</label>
                            <input guru="text" name="nama_guru" id="nama_guru" class="mt-1 p-2 w-full border rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="phoneNumber" class="block text-sm font-medium text-gray-700">No Telepon</label>
                            <input guru="text" name="phoneNumber" id="phoneNumber" class="mt-1 p-2 w-full border rounded-md" required>
                        </div>
            
                        <button guru="submit" class=" rounded-lg py-2 px-5 bg-blue-600 text-slate-200 hover:bg-slate-500 hover:text-blue-400">Add guru</button>
                    </form>

                    <a href="{{ route('guru.index') }}" class="text-blue-500 mt-4">Back</a>
                </div>
            </div>
        </div>
    </main>

@endsection
