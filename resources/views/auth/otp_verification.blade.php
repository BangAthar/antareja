@extends('layouts.main')
@section('container')
    <section class="w-full h-screen bg-transparent">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="flex items-center justify-center my-[10%]">
                <div class="bg-white p-8 rounded-lg shadow-md w-96">
                    <h2 class="text-2xl font-bold mb-4 text-center">Masukkan Kode OTP</h2>
                    <p class="text-md text-center">Silahkan cek email anda untuk kode OTP verifikasi yang kami kirim</p>
                    <form class="space-y-4" action="{{ route('verifyotp') }}" method="POST">
                        @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                            <strong class="font-bold">Berhasil!</strong>
                            <span class="block w-[95%] text-md">{{ session('success') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <i class="fa-solid fa-x cursor-pointer close-button"></i>
                            </span>
                        </div>
                        @endif
                        @if (session()->has('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                            <strong class="font-bold">ERRORR!</strong>
                            <span class="block w-[95%] text-md">{{ session('error') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <i class="fa-solid fa-x cursor-pointer close-button"></i>
                            </span>
                        </div>
                        @endif
                        
                        @csrf
                        <div>
                            <label for="token" class="block text-sm text-gray-700 font-semibold mb-3">Kode OTP</label>
                            <input type="number" name="token" id="otp" placeholder="Masukkan kode OTP" required autofocus
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        <div>
                            <button type="submit"
                                class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                Verifikasi
                            </button>
                        </div>
                        <div>
                            <div class="text-black text-center mt-5">
                                Kode tidak ada?<a href="/resend-verify"
                                    class="underline text-blue-500">
                                     Kirim ulang kode
                                </a>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
