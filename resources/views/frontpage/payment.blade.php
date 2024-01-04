@extends('layouts.mainlayout')

@section('title', 'Expertlingo')

@section('content')

        <div class="flex items-center justify-center h-screen bg-slate-900">
            <div id="app" class="w-10/12">
                <div class="bg-white p-8 rounded-lg shadow-xl" id="reservationForm">
                    <h2 class="text-3xl font-semibold mb-6">Pembayaran</h2>
                    <form action="#" method="post" @submit.prevent="submitReservation">
        
                        <!-- Existing form fields -->
        
                        <div class="mb-4">
                            <label for="metode_pembayaran" class="block text-gray-700 text-sm font-bold mb-2">Metode Pembayaran:</label>
                            <select id="metode_pembayaran" name="metode_pembayaran" v-model="selectedPaymentMethod" class="w-full border border-gray-300 p-2 rounded">
                                <option value="Dana">DANA</option>
                                <option value="OVO">OVO</option>
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="BCA">BCA</option>
                                <option value="Gopay">GoPay</option>
                            </select>
                        </div>
        
                        <div class="mb-4">
                            <p class="text-gray-800 font-bold mb-2">Rincian Pembayaran:</p>
                            <p>Total Harga: @{{ formatRupiah(totalHarga) }}</p>
                            <p>Metode Pembayaran: @{{ selectedPaymentMethod }}</p>
                            <!-- You can add more details as needed -->
                        </div>
        
                        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Bayar</button>
                    </form>
                </div>
            </div>
        </div>
        
    
    <script>
        new Vue({
            el: '#app',
            data: {
                jumlahKamar: 1,
                jumlahMalam: 1,
                hargaPerMalam: 2000000,
                selectedPaymentMethod: 'Dana' // Default payment method
            },
            computed: {
                totalHarga: function () {
                    return this.jumlahKamar * this.hargaPerMalam * this.jumlahMalam;
                }
            },
            methods: {
                formatRupiah: function (nilai) {
                    return "Rp " + nilai.toFixed(0).replace(/(\d)(?=(\d{3})+$)/g, "$1,");
                },
                submitReservation: function () {
                    // You can use the selectedPaymentMethod and other details for further processing
                    Swal.fire({
                        icon: 'success',
                        title: 'Pembayaran Berhasil!',
                        text: 'Terima kasih atas pembayaran: ' + this.selectedPaymentMethod,
                    });
                }
            }
        });
    </script>
@endsection