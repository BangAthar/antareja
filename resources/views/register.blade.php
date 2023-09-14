@extends('layouts.main')

@section('container')
    <section class="w-full h-full bg-transparent">
        <div class="container max-w-7xl px-4 pb-24 mx-auto sm:px-6 lg:px-10">
            <div class=" w-[90%] h-full bg-gray-100 rounded-xl shadow-xl mx-auto mt-[5%]">
                <h1 class="text-gray-800 text-2xl md:text-4xl w-[300px] mx-auto text-center font-bold rounded pt-8">Moklet Hadir Untuk <span class="text-red-500">Antareja</span></h1>
                <p class="text-center text-black font-medium pt-5 px-1">Daftarkan akun sebagai peserta untuk login ke halaman aplikasi Antareja</p>
                <div class="container w-[90%] mx-auto mt-5">
                    <form method="POST" action="{{ route('CreateAccount') }}">
                        @csrf
                        @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                            <strong class="font-bold">Berhasil!</strong>
                            <span class="block w-[95%]">{{ session('success') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <i class="fa-solid fa-x cursor-pointer close-button"></i>
                            </span>
                        </div>
                        @endif

                        @if (session()->has('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                            <strong class="font-bold">ERRORR!</strong>
                            <span class="block w-[95%]">{{ session('error') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <i class="fa-solid fa-x cursor-pointer close-button"></i>
                            </span>
                        </div>
                        @endif
                        <div class="flex flex-col md:flex-row w-full gap-0 md:gap-5">
                            <div class="w-full">
                                <div class="mb-4">
                                    <label for="name" class="block mb-1 text-md font-medium text-gray-700">Nama Lengkap</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                        class="px-4 py-2 border border-gray-300 rounded w-full @error('name') border-red-500 @enderror" placeholder="Masukan nama lengkap anda">
                                    @error('name')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <div class="mb-4">
                                    <label for="team_name" class="block mb-1 text-md font-medium text-gray-700">Nama team</label>
                                    <div class="relative">
                                        <select id="team_name" name="team_name" class="border border-gray-300 rounded-md px-4 py-2 w-full appearance-none">
                                            @foreach ($teams as $team)
                                                @if (!($team->id === 1 && $team->team_name === 'panitiaadmin'))
                                                    <option value="{{ $team->team_name }}">{{ $team->team_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                    </div>
                                    <span class="text-black text-sm mt-1">Jika nama team tidak tersedia silahkan <a href="/daftar-team" class="text-red-400 underline">daftar team</a></span>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="email" class="block mb-1 text-md font-medium text-gray-700">Email</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                        class="px-4 py-2 border border-gray-300 rounded w-full @error('email') border-red-500 @enderror" placeholder="masukan email pribadi anda">
                                    @error('email')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full mt-1">
                                <div class="mb-4">
                                    <label for="team_role" class="block mb-1 text-md font-medium text-gray-700">Posisi team</label>
                                    <select id="team_role" name="team_role" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                        <option value="pasukan">Pasukan</option>
                                        <option value="official">Official</option>
                                        <option value="pelatih">Pelatih</option>
                                        <option value="danpas">Danpas</option>
                                      </select>
                                    @error('team_role')
                                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <div class="mb-4">
                                    <label for="password" class="block mb-1 text-md font-medium text-gray-700">Password</label>
                                    <input id="password" type="password" name="password" required
                                        class="px-4 py-2 border border-gray-300 rounded w-full @error('password') border-red-500 @enderror" placeholder="Masukan password anda">
                                    @error('password')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password_confirmation" class="block mb-1 text-md font-medium text-gray-700">Konfirmasi Password</label>
                                    <input id="nomor_hp" type="password" name="password_confirmation" required
                                        class="px-4 py-2 border border-gray-300 rounded w-full @error('password_confirmation') border-red-500 @enderror" placeholder="Konfirmasi password">
                                    @error('password_confirmation')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        
                        <div class="text-center">
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-400 text-white font-medium py-2 w-full rounded focus:outline-none focus:shadow-outline" onClick="return confirm('Apakah data yang anda masukan sudah benar?')">
                                Daftar Akun
                            </button>
                        </div>
                    </form>
                    <div class="text-center pt-4">
                        Sudah punya akun? Silahkan login untuk masuk ke halaman aplikasi <span class="text-red-400 underline"><a href="/login">Login</a></span>
                    </div>
                    <div class="text-center pt-2 pb-8">
                        Belum memilik team? Silahkan daftar team untuk melakukan registrasi lomba <span class="text-red-400 underline"><a href="/daftar-team">Daftarkan Team</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection