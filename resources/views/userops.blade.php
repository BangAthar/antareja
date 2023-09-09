@extends('layouts.main')
@section('container')
<section class="w-full h-[100vh] bg-transparent">
    <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
        <div class=" w-[98%] md:w-[55%] h-full bg-gray-100 rounded-xl shadow-xl mx-auto mt-[25%] sm:mt-[30%] md:mt-[15%] pb-16">
            <h1 class="text-gray-800 text-2xl md:text-4xl w-full mx-auto text-center font-bold rounded pt-8 px-2 md:px-5">Moklet Hadir Untuk <span class="text-red-500">Antareja</span></h1>
            <h2 class="text-red-700 font-semibold text-center text-lg md:text-xl pt-5 px-2 md:px-5">Selamat datang, portal untuk registrasi lomba serta login ke halaman aplikasi</h2>
            <div class="container w-full md:w-[80%] mx-auto mt-5">
                <div class="flex flex-col md:flex-col justify-center items-center w-[80%] mx-auto">
                    <a href="/register-team" class="bg-red-500 hover:bg-red-400 text-white shadow-nopal font-medium py-2 px-1 w-full text-center rounded focus:outline-none focus:shadow-outline mt-5">
                        Daftarkan Team!
                    </a>
                    <a href="/register" class="bg-red-500 hover:bg-red-400 text-white font-medium shadow-nopal py-2 px-1 w-full text-center rounded focus:outline-none focus:shadow-outline mt-10">
                        Daftar akun ke halaman aplikasi
                    </a>
                    <a href="/login" class="bg-red-500 hover:bg-red-400 text-white font-medium shadow-nopal py-2 px-1 w-full text-center rounded focus:outline-none focus:shadow-outline mt-10">
                        Login ke halaman aplikasi</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection