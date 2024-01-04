@extends('layouts.mainlayout')

@section('title', 'Expertlingo')

@section('content')

         <!-- Home Section -->
         <section id="profile" class="py-3 bg-slate-900">
            <div class="container mx-auto flex justify-end">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                    <div class="bg-white p-6 rounded-lg flex items-center">
                        <img src="images/Mikasa.jpeg" alt="Mikasa Akkaman" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h2 class="text-gray-800 font-bold text-3xl">Profil</h2>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Mikasa Akkaman</h3>
                            <p class="text-gray-600">Student</p>
                            <!-- Add more details as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <section class="px-2 pt-4 pb-12 text-black bg-slate-900">

   
      <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-6 text-gray-900">English Course</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Card -->
            <a href="{{route('kursus')}}" class="bg-slate-600 p-6 rounded-lg ">
                <img src="images/Mulai Kursus.png" alt="English Icon" class="mx-auto mb-4 h-60 w-50">
                <p class="text-gray-600 mb-4">English language.</p>
                <button v-if="!courseStarted" @click="startCourse('Basic English')"
                    class="flex justify-center items-center px-4 py-2 bg-blue-500 text-white text-4xl 
                    text-bold rounded-md hover:bg-yellow-500 focus:outline-none focus:shadow-outline"> Mulai Kursus
                </button>
            </a>
            <!-- Add more course cards as needed -->
        </div>
    </div>

        <div class=" p-20 grid grid-cols-6 gap-4">
                <!-- Card -->
                <div class="bg-slate-600 p-6 rounded-lg shadow-md hover:bg-yellow-500" href="{{route('index')}}">
                    <div class="flex justify-center mb-4">
                        <img src="images/icon pilih guru.png" alt="Pilih Guru Icon" class="w-30 h-20">
                    </div>
                    <h5 class="text-3xl text-white font-bold mb-2">Memilih Guru</h5>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <button class="bg-slate-600 p-6 rounded-lg shadow-md hover:bg-yellow-500" href="{{route('index')}}">
                    <div class="flex justify-center mb-4">
                        <img src="images/icon my class.png" alt="My Class Icon" class="w-30 h-20">
                    </div>
                    <h5 class="text-4xl text-white font-bold mb-2">My Class</h5>
                </button>
        </div>
    
    </section> <!-- end of container -->
    
    <!--jadwal-->
    <section id="app" class="bg-slate-900 p-6">
      <div id="kalender-container" class="bg-white rounded shadow-md p-12 mx-auto max-w-3xl mb-8 transition">
        <h1 class="text-4xl p-4 flex justify-between font-bold text-gray-900"> Jadwal </h1>
          <div class="flex justify-between items-center mb-4">
            <button class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-blue-950 rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" @click="gantiBulan(-1)">
              Sebelumnya
            </button>            
            <h2 class="text-3xl font-bold">@{{ namaBulan }} @{{ tahun }}</h2>
            <button class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-blue-950 rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" @click="gantiBulan(1)">
              Berikutnya
            </button>
          </div>      
          <table class="w-full">
              <thead>
                  <tr>
                      <th class="py-4">Senin</th>
                      <th class="py-4">Selasa</th>
                      <th class="py-4">Rabu</th>
                      <th class="py-4">Kamis</th>
                      <th class="py-4">Jumat</th>
                      <th class="py-4">Sabtu</th>
                      <th class="py-4">Minggu</th>
                  </tr>
              </thead>
              <tbody>
                  <tr v-for="(week, index) in weeks" :key="index">
                    <td v-for="day in week" :key="day" :class="['text-center', 'py-4', {'text-yellow-500': isHariIni(day)}, getColorClass(day)]" @click="selectDate(day)">@{{ day }}</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </section>


        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->

        <script>
            new Vue({
              el: '#app',
              data: {
                weeks: [],
                namaBulan: '',
                tahun: '',
                currentDate: new Date(),
                selectedDate: null
              },
              mounted() {
                this.updateTanggal();
              },
              methods: {
                updateTanggal() {
                  // Mendapatkan tanggal saat ini
                  var today = new Date(this.currentDate);
                  today.setHours(0, 0, 0, 0);
        
                  // Mengatur nama bulan dan tahun
                  this.namaBulan = today.toLocaleDateString('id-ID', { month: 'long' });
                  this.tahun = today.getFullYear();
        
                  // Menghasilkan daftar tanggal untuk bulan ini
                  this.tanggal = [];
                  var firstDay = new Date(today.getFullYear(), today.getMonth(), 1);
                  var lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0);
        
                  for (let i = 1; i <= lastDay.getDate(); i++) {
                    var currentDate = new Date(today.getFullYear(), today.getMonth(), i);
                    this.tanggal.push(currentDate.toLocaleDateString('id-ID', { day: 'numeric' }));
                  }
        
                  // Mengatur mingguan
                  this.weeks = this.chunkArray(this.tanggal, 7);
                },
                chunkArray(arr, size) {
                  return Array.from({ length: Math.ceil(arr.length / size) }, (v, i) =>
                    arr.slice(i * size, i * size + size)
                  );
                },
                isHariIni(day) {
                  var today = new Date();
                  return today.getDate().toString() === day && today.getMonth() === this.currentDate.getMonth() && today.getFullYear() === this.currentDate.getFullYear();
                },
                gantiBulan(offset) {
                  this.currentDate.setMonth(this.currentDate.getMonth() + offset);
                  this.updateTanggal();
                },
                getColorClass(day) {
                  if (day === this.selectedDate) {
                    return 'biru';
                  } else if (this.isHariIni(day)) {
                    return 'kuning';
                  } else {
                    return '';
                  }
                },
                selectDate(day) {
                  this.selectedDate = day;
                }
              }
            });
          </script>
@endsection
