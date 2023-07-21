@extends('layouts.main')

@section('container')
    <section class="w-full h-full bg-transparent">
        <div class="container max-w-7xl px-4 pb-24 mx-auto sm:px-6 lg:px-10">
            <div class=" w-[90%] sm:w-[70%] md:w-[55%] lg:w-[43%] h-full bg-gray-100 rounded-xl shadow-xl mx-auto mt-[5%]">
                <h1 class="text-gray-800 text-2xl md:text-4xl w-[300px] mx-auto text-center font-bold rounded pt-8">Moklet Hadir Untuk <span class="text-red-500">Antareja</span></h1>
                <div class="container w-[80%] mx-auto mt-5">
                    <form method="POST" action="{{ route('CreateAccount') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block mb-1 text-md font-medium text-gray-700">Nama Lengkap</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('name') border-red-500 @enderror" placeholder="Masukan nama tim anda">
                            @error('name')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="team_name" class="block mb-1 text-md font-medium text-gray-700">Nama Team</label>
                            <input id="team_name" type="text" name="team_name" value="{{ old('team_name') }}" required autofocus
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('team_name') border-red-500 @enderror" placeholder="Masukan nama tim anda">
                            @error('team_name')
                            <span class="text-red-500 text-sm mt-1">Team anda belum terdaftar di database, jadi tidak dapat melakukan register. Hubungi admin!</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="nis" class="block mb-1 text-md font-medium text-gray-700">NIS</label>
                            <input id="nis" type="text" name="nis" value="{{ old('nis') }}" required autofocus
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('nis') border-red-500 @enderror" placeholder="Masukan NIS">
                            @error('nis')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="nisn" class="block mb-1 text-md font-medium text-gray-700">NISN</label>
                            <input id="nisn" type="text" name="nisn" value="{{ old('nisn') }}" required autofocus
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('nisn') border-red-500 @enderror" placeholder="Masukan nama tim anda">
                            @error('nisn')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block mb-1 text-md font-medium text-gray-700">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('email') border-red-500 @enderror" placeholder="masukan email tim anda">
                            @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

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
                            <label for="sekolah" class="block mb-1 text-md font-medium text-gray-700">Nama Sekolah</label>
                            <input id="sekolah" type="text" name="sekolah" value="{{ old('sekolah') }}" required
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('sekolah') border-red-500 @enderror" placeholder="Masukan asal sekolah anda">
                            @error('sekolah')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="instagram" class="block mb-1 text-md font-medium text-gray-700">Instagram</label>
                            <input id="instagram" type="text" name="instagram" value="{{ old('instagram') }}" required
                                class="px-4 py-2 border border-gray-300 rounded w-full @error('instagram') border-red-500 @enderror" placeholder="Masukan akun Instagram">
                            @error('instagram')
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
                        <div class="text-center">
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-400 text-white font-medium py-2 px-[45%] rounded focus:outline-none focus:shadow-outline">
                                Daftar
                            </button>
                        </div>
                    </form>
                    <div class="text-center pt-4 pb-8">Sudah punya akun? <span class="text-red-400"><a href="/login">Login</a></span></div>
                </div>
            </div>
        </div>
    </section>
@endsection