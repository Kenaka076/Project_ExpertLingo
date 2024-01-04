@extends('layouts.mainlayout')

@section('title', 'Expertlingo')

@section('content')

<section id="app" class="bg-gradient-to-b from-slate-800 via-slate-900 to-slate-900 p-6 text-white h-screen flex justify-center items-center" v-cloak>
    <!-- Informasi Kursus -->
    <div class="bg-white rounded-md p-8 shadow-md w-full max-w-md">
        <h1 class="text-4xl font-bold mb-4 text-gray-800">Kursus</h1>
        
        <div class="mb-4">
            <label for="waktu-pelaksanaan" class="block text-gray-800 text-sm font-medium">Waktu Pelaksanaan:</label>
            <select v-model="courseType" id="waktu-pelaksanaan" name="waktu-pelaksanaan"
                    class="mt-1 p-2 w-full border rounded-md text-gray-800 focus:outline-none focus:ring focus:border-blue-300 transition">
                <option value="pagi">Pagi</option>
                <option value="siang">Siang</option>
                <option value="sore">Sore</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="custom-time" class="block text-gray-800 text-sm font-medium">Durasi Waktu Pelaksanaan:</label>
            <div class="flex">
                <!-- Hour Selector -->
                <input v-model="hours" type="number" id="hour-selector" min="0" max="23"
                    class="mr-2 p-2 border rounded-md text-gray-800 bg-white focus:outline-none focus:ring focus:border-blue-300 transition" placeholder="Hour">

                <!-- Minute Selector -->
                <input v-model="minutes" type="number" id="minute-selector" min="0" max="59"
                    class="mr-2 p-2 border rounded-md text-gray-800 bg-white focus:outline-none focus:ring focus:border-blue-300 transition" placeholder="Minute">

                <!-- Second Selector -->
                <input v-model="seconds" type="number" id="second-selector" min="0" max="59"
                    class="p-2 border rounded-md text-gray-800 bg-white focus:outline-none focus:ring focus:border-blue-300 transition" placeholder="Second">
            </div>

            <!-- Spinner for Custom Time -->
            <div v-show="showSpinner" class="mt-2">
                <div class="spinner-border text-blue-500" role="status"></div>
            </div>
        </div>

            <a href="{{ route('pilih_guru')}}">
                <button v-if="!courseStarted" @click="startCourse"
                    class="mt-4 w-full px-4 py-2 bg-blue-500 text-white text-xl font-bold rounded-md hover:bg-yellow-500 focus:outline-none focus:ring focus:border-blue-300 transition">
                    Selanjutnya
                </button>
            </a>    
            </div>
        </div>
    </section>

    <!-- Add the following script for Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                courseType: '',
                courseDate: '',
                hours: 0,
                minutes: 0,
                seconds: 0,
                showSpinner: false,
                courseStarted: false,
            },
            methods: {
                handleTimeSelection: function () {
                    // Show spinner when time is selected
                    this.showSpinner = true;

                    // Simulate an asynchronous operation (e.g., API call) with setTimeout
                    setTimeout(() => {
                        // Hide spinner after a delay (replace this with your actual logic)
                        this.showSpinner = false;
                    }, 1000); // Adjust the delay as needed
                },
                startCourse: function () {
                    // Add logic to handle starting the course
                    console.log('Course started!');
                    this.courseStarted = true;
                    // You can add more functionality here, such as redirecting to the next page
                },
            },
        });
    </script>
@endsection
