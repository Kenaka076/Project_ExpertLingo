@extends('backpage.admintemplate')

@section('title', 'Admin Dashboard')

@section('content-title', 'Dashboard')

@section('content')
    <main class="flex-1 ml-28">
        <div class="bg-blue"> <!-- Hero Section-->
            
            <div class="mx-auto place-content-center h-screen w-9/12 text-slate-900">
                <div class="container w-6/12">
                    <h2 class="my-4 text-2xl font-semibold text-black">Edit Jadwal</h2>
            
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
            
                    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="id_guru" class="text-black">Guru:</label>
                            <select name="id_guru" class="form-control">
                                <option value="" disabled class="text-gray-500">Select Guru</option>
                                @foreach ($gurus as $guru)
                                    <option value="{{ $guru->id }}" {{ $guru->id == $jadwal->id_guru ? 'selected' : '' }}>{{ $guru->nama_guru }}</option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="form-group">
                            <label for="id_student" class="text-black">Student:</label>
                            <select name="id_student" class="form-control">
                                <option value="" disabled class="text-gray-500">Select Student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}" {{ $student->id == $jadwal->id_student ? 'selected' : '' }}>{{ $student->firstName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jadwal" class="text-black">Jadwal:</label>
                            <select name="jadwal" class="form-control" required>
                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                                <option value="Sore">Sore</option>
                            </select>
                        </div>
            
            
                        <div class="form-group">
                            <label for="jam_mulai" class="text-black">Jam Mulai:</label>
                            <select name="jam_mulai" class="form-control">
                                @for ($i = 7; $i < 24; $i++)
                                    @for ($j = 0; $j < 60; $j += 15)
                                        <option value="{{ sprintf('%02d:%02d', $i, $j) }}" {{ sprintf('%02d:%02d', $i, $j) == $jadwal->jam_mulai ? 'selected' : '' }}>{{ sprintf('%02d:%02d', $i, $j) }}</option>
                                    @endfor
                                @endfor
                            </select>
                        </div>
            
                        <div class="form-group">
                            <label for="jam_selesai" class="text-black">Jam Selesai:</label>
                            <select name="jam_selesai" class="form-control">
                                @for ($i = 7; $i < 24; $i++)
                                    @for ($j = 0; $j < 60; $j += 15)
                                        <option value="{{ sprintf('%02d:%02d', $i, $j) }}" {{ sprintf('%02d:%02d', $i, $j) == $jadwal->jam_selesai ? 'selected' : '' }}>{{ sprintf('%02d:%02d', $i, $j) }}</option>
                                    @endfor
                                @endfor
                            </select>
                        </div>
            
                        <button type="submit" class="btn btn-primary">Update Jadwal</button>
                    </form>

                    <a href="{{ route('jadwal.index') }}" class="text-blue-500 mt-4">Back</a>
                </div>
            </div>
        </div>
    </main>
@endsection
