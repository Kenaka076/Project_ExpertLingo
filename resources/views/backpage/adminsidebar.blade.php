<aside class="fixed bg-blue-950 text-white w-2/12 border-r border-white min-h-screen">
    <div class="p-4 py-10">
        <!-- Sidebar content -->
        <ul>
            <li class="p-2 pl-5 border-b border-gray-700 bg-blue-900">
                <a href="{{ route('jadwal.index') }}" class="text-gray-300 hover:text-white">Jadwal</a>
            </li>
            <li class="p-2 pl-5 border-b border-gray-700 bg-blue-900">
                <a href="{{ route('student.index') }}" class="text-gray-300 hover:text-white">Student</a>
            </li>
            <li class="p-2 pl-5 border-b border-gray-700 bg-blue-900">
                <a href="{{ route('guru.index') }}" class="text-gray-300 hover:text-white">Guru</a>
            </li>
        </ul>
    </div>
</aside>