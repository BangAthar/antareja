@extends('layouts.main')

@section('container')
    <section class="w-full h-full bg-transparent">
        <div class="container max-w-7xl px-4 pb-24 mx-auto sm:px-6 lg:px-10">
            <div class="w-[90%] md:w-[45%] h-full bg-gray-100 rounded-xl shadow-xl mx-auto mt-[5%]">
                <h1 class="text-gray-800 text-2xl md:text-4xl w-[300px] mx-auto text-center font-bold rounded pt-8">Moklet Hadir Untuk <span class="text-red-500">Antareja</span></h1>
                <p class="text-center text-black font-medium pt-5">Daftarkan team anda untuk mengikuti lomba LKBB Antareja</p>
                <div class="container w-[90%] mx-auto mt-5">
                    <form method="POST" action="{{ route('registeamadd') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="w-full">
                                <div class="mb-4">
                                    <label for="team_name" class="block mb-1 text-md font-medium text-gray-700">Nama Team</label>
                                    <input id="team_name" type="text" name="team_name" value="{{ old('team_name') }}" required autofocus
                                        class="px-4 py-2 border border-gray-300 rounded w-full @error('team_name') border-red-500 @enderror" placeholder="Masukan nama tim anda">
                                    @error('team_name')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="team_school_type" class="block mb-1 text-md font-medium text-gray-700">Jenis Sekolah</label>
                                    <select id="team_school_type" name="team_school_type" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                        <option value="SMP/MTS">SMP/MTS</option>
                                        <option value="SMA/SMK/MA">SMA/SMK/MA/MAK</option>
                                      </select>
                                    @error('team_school_type')
                                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="team_school_payment" class="block mb-1 text-md font-medium text-gray-700">Jenis Pembayaran</label>
                                    <select id="team_school_payment" name="team_school_payment" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                        <option value="TRANSFER/ONLINE">Transfer / Online</option>
                                        <option value="LANGSUNG/CASH">Langsung / Cash</option>
                                      </select>
                                    @error('team_school_payment')
                                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="team_payment_proof" class="block mb-3 text-md font-medium text-gray-700">Bukti Pembayaran Online</label>
                                    <input id="team_payment_proof" type="file" name="team_payment_proof" accept="image/*"
                                        class="hidden" onchange="showFileName(this)">
                                    <label for="team_payment_proof" class="cursor-pointer bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-md w-full text-center">
                                        <svg class="w-6 h-5 float-left text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Pilih Foto
                                    </label>
                                    <span id="file-name" class="block text-gray-500 mt-2"></span>
                                    @error('team_payment_proof')
                                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        
                        <div class="text-center">
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-400 text-white font-medium py-2 w-full rounded focus:outline-none focus:shadow-outline">
                                Daftar Team
                            </button>
                        </div>
                    </form>
                    <div class="text-center pt-4 pb-8">Sudah punya team? Silahkan daftar akun untuk masuk ke halaman aplikasi <span class="text-red-400 underline"><a href="/daftar-akun">Daftar akun</a></span></div>
                </div>
            </div>
        </div>
    </section>
@endsection