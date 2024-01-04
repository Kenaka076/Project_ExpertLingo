@extends('layouts.mainlayout')

@section('title', 'Expertlingo')

@section('content')

<section id="app">
    <div class="mb-8 bg-slate-900">
        <h1 class="text-3xl text-white font-semibold mb-8">Pilih Guru</h1>

        <div class="grid grid-cols-1 md:grid-cols-8 lg:grid-cols-3 xl:grid-cols-3 gap-8 bg-slate-800 p-10 rounded-md" id="guruGrid">
            <!-- Guru Box -->
            <div v-for="(guru, index) in gurus" :key="index" :class="{ 'bg-gray-700': index === selectedGuru }" class="bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-between space-y-4 guru-box cursor-pointer transition-transform duration-300 transform hover:scale-105" @click="selectGuru(index)">
                <div class="flex-shrink-0">
                    <img :src="guru.image" :alt="'Gambar ' + (index + 1)" class="w-20 h-20 object-cover rounded-full">
                </div>
                <div class="text-center">
                    <h2 class="text-md font-semibold">@{{ guru.name }}</h2>
                    <p class="text-sm text-gray-600">@{{ guru.education }}</p>
                </div>
                <div v-if="guru.showDetails" class="mt-4">
                    <!-- Additional details for each guru -->
                    <h3 class="text-md font-semibold">Riwayat Pendidikan dan Pengalaman</h3>
                    <ul class="list-disc pl-4 text-sm">
                        <li><strong>SD:</strong> @{{ guru.educationHistory.sd }}</li>
                        <li><strong>SMP:</strong> @{{ guru.educationHistory.smp }}</li>
                        <li><strong>SMA:</strong> @{{ guru.educationHistory.sma }}</li>
                        <li><strong>Sarjana:</strong> @{{ guru.educationHistory.sarjana }}</li>
                        <li><strong>Magister:</strong> @{{ guru.educationHistory.magister }}</li>
                    </ul>
                    <p class="text-sm">@{{ guru.details }}</p>
                </div>
                <button @click="toggleDetails(index)" class="text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                    <!-- Icon panah ke bawah dari Heroicons -->
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Selanjutnya Button -->
        <a v-if="!courseStarted" :href="routeToPayment" @click="startCourse(selectedGuru)">
            <button class="flex justify-center items-center px-4 py-2 bg-blue-500 text-white text-md font-bold rounded-md hover:bg-yellow-500 focus:outline-none focus:shadow-outline">
                Selanjutnya
            </button>
        </a>
    </div>
</section>

    <!-- Include Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <!-- Include anime.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    <style>
        .guru-box {
            transition: transform 0.3s ease-in-out;
        }
    
        .guru-box:hover {
            transform: scale(1.05);
        }
    
        .selected {
            background-color: #4a5568; /* Dark gray color */
            color: white;
        }
    </style>
    
    <script>
        new Vue({
            el: '#app',
            data: {
                courseStarted: false,
                selectedGuru: null,
                gurus: [
                    { name: 'Ms. Raiden Ei', education: 'Pendidikan terakhir magister di Universitas Inazuma', image: 'https://i.pinimg.com/originals/56/2f/15/562f1554377c5cb67a3d77ea0398c9c7.jpg', details: 'Ms. Raiden Ei memiliki latar belakang pendidikan magister di Universitas Inazuma. Beliau memiliki pengalaman mengajar Bahasa Inggris dengan fokus pada pengajaran keterampilan berbicara dan mendengarkan.', educationHistory: { sd: 'SD X', smp: 'SMP Y', sma: 'SMA Z', sarjana: 'Sarjana di Universitas ABC', magister: 'Magister di Universitas XYZ' }, showDetails: false },
                    { name: 'Mrs. Levi Akkaman', education: 'Pendidikan terakhir Sarjana di Universitas Negeri Wall Maria', image: 'https://i.pinimg.com/originals/22/36/24/2236242ae20654501563826fa7288ab9.jpg', details: 'Mrs. Levi Akkaman menyelesaikan pendidikan sarjana di Universitas Negeri Wall Maria. Beliau memiliki pengalaman luas dalam pengajaran Bahasa Inggris untuk penutur kosa kata yang cukup unik dan memiliki keahlian dalam menyusun materi pembelajaran yang menarik.', educationHistory: { sd: 'SD Pertiwi', smp: 'SMP Negeri 1', sma: 'SMA Karya', sarjana: 'Sarjana di Universitas Language', magister: 'Magister di Universitas Komunikasi' }, showDetails: false },
                    { name: 'Mrs. Toji Fusiguro', education: 'Pendidikan terakhir magister di Universitas Kyoto', image: 'https://i.pinimg.com/originals/2d/c2/06/2dc20634672fffd6864c41ff0b842d9d.png', details: 'Mrs. Toji Fusiguro memiliki gelar magister di bidang pendidikan. Beliau telah mengajar Bahasa Inggris untuk berbagai tingkatan, mulai dari pemula hingga tingkat lanjutan.', educationHistory: { sd: 'SD Bahagia', smp: 'SMP Ceria', sma: 'SMA Sejahtera', sarjana: 'Sarjana di Universitas Bahasa', magister: 'Magister di Universitas Pendidikan' }, showDetails: false },
                    { name: 'Mrs. Gojo Satoru', education: 'Pendidikan terakhir magister di Universitas Jujutsu Tokyo', image: 'https://i.pinimg.com/originals/25/ea/49/25ea499e8dc57ffd7461f40cc12e8c4b.jpg', details: 'Mrs. Gojo Satoru memegang gelar magister di bidang Sastra Inggris. Beliau memiliki pengalaman mengajar Bahasa Indonesia dan sering mengadakan seminar mengenai pengajaran bahasa Inggris.', educationHistory: { sd: 'SD Mandiri', smp: 'SMP Unggul', sma: 'SMA Prestasi', sarjana: 'Sarjana di Universitas Jujutsu', magister: 'Magister di Universitas Linguistik' }, showDetails: false }
                ],
                routeToPayment: "{{ route('payment') }}"
            },
            methods: {
                startCourse(course) {
                    // Your logic to start the course
                    console.log('Course started:', course);
                },
                toggleDetails(index) {
                    this.gurus[index].showDetails = !this.gurus[index].showDetails;
                     anime({
                        targets: '.details-content',
                        opacity: [0, 1],
                        duration: 1000,
                        easing: 'easeInOutQuad'
                    });
                },
                selectGuru(index) {
                    this.selectedGuru = this.gurus[index];
                }
            }
        });
    </script>

<style>
    .details-container {
        opacity: 0;
    }
</style>
@endsection