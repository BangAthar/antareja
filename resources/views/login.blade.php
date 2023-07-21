@extends('layouts.main')

@section('container')
    <section class="w-full h-[100vh] bg-transparent">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class=" w-[90%] sm:w-[70%] md:w-[55%] lg:w-[43%] h-full bg-gray-100 rounded-xl shadow-xl mx-auto mt-[5%] pb-7">
                <h1 class="text-gray-800 text-2xl md:text-4xl w-[300px] mx-auto text-center font-bold rounded pt-8">Moklet Hadir Untuk <span class="text-red-500">Antareja</span></h1>
                <h2 class="text-red-500 font-semibold text-center text-lg md:text-xl pt-5 underline">Silahkan Login</h2>
                <div class="container w-[80%] mx-auto mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                            <strong class="font-bold">Register Berhasil!</strong>
                            <span class="block w-[95%]">Data berhasil terdaftar di sistem.</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <i class="fa-solid fa-x cursor-pointer close-button"></i>
                            </span>
                        </div>
                        @endif

                        @if (session()->has('loginError'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                            <strong class="font-bold">Login Gagal!</strong>
                            <span class="block w-[95%]">Email dan password mungkin salah.</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <i class="fa-solid fa-x cursor-pointer close-button"></i>
                            </span>
                        </div>
                        @endif
                        
                        <div class="mb-4">
                            <label for="email" class="block mb-1 text-md font-medium text-gray-700">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('email') border-red-500 @enderror" placeholder="Masukan Email Anda">
                            @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block mb-1 text-md font-medium text-gray-700">Password</label>
                            <input id="password" type="password" name="password" required
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('password') border-red-500 @enderror" placeholder="Masukan Password Anda">
                            @error('password')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input class="mr-1" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="text-sm font-medium text-gray-700">Remember me</label>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-400 text-white font-medium py-2 px-[40%] rounded focus:outline-none focus:shadow-outline">
                                Login
                            </button>
                        </div>
                    </form>
                    <div class="text-center pt-4">
                        Belum Punya Akun? <span class="text-red-400 underline"><a href="/register">Daftar!</a></span>
                    </div>
                    <div class="text-center pt-4 text-gray-800">
                        Lupa password? <span class="text-red-400 underline"><a href="#" id="openPopup">Hubungi admin</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
