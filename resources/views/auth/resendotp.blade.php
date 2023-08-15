@extends('layouts.main')
@section('container')
<section class="w-full h-screen bg-transparent">
    <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
        <div class="flex items-center justify-center my-[10%]">
            <div class="bg-white p-8 rounded-lg shadow-md w-96">
                <h2 class="text-2xl font-bold mb-4 text-center">Kirim Ulang kode OTP</h2>
                <form class="space-y-4" action="{{ route('resendotpaction') }}" method="POST">
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
                        <strong class="font-bold">ERRRORR!</strong>
                        <span class="block w-[95%] text-md">{{ session('error') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <i class="fa-solid fa-x cursor-pointer close-button"></i>
                        </span>
                    </div>
                    @endif
                    
                    @csrf
                    <div>
                        <label for="email" class="block text-sm text-gray-700 font-semibold mb-3">Email anda</label>
                        <input type="email" name="email" id="otp" placeholder="Masukan alamat email" required autofocus
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('email') border-red-500 @enderror">
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    <div>
                        <button type="submit"
                            class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                            Kirim
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
@endsection