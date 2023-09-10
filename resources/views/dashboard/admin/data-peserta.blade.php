@extends('dashboard.layouts.main')
@section('container')
<div class="relative bg-red-500 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
        <!-- Card stats -->
        <div class="flex flex-wrap justify-center">
           <h1 class="text-xl font-bold text-white">HALAMAN ADMIN</h1>
        </div>
    </div>
</div>
<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-col w-full mt-16 mb-[20%]">
        <div class="w-full px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            <i class="fa-solid fa-magnifying-glass mr-2"></i> Cari data peserta Antareja
                        </h6>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 px-4 py-10 pt-0 justify-between">
                    <div class="w-full mx-auto lg:mx-0 h-[80%] bg-white shadow rounded px-3 mt-2">
                        <form method="POST" accept="">
                            <h6 class="text-blueGray-400 text-sm pt-3 mb-6 font-bold uppercase">
                                Lihat data peserta
                            </h6>

                            {{-- TABEL DIBAWAH INI HANYA BERFUNGSI UNTUK MELIHAT DATA PESERTA, ADMIN TIDAK DAPAT MENGHUBAH HANYA BISA MENGHAPUS --}}
                            
                            <div class="flex flex-col">
                                @if ($showuser)
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full"
                                            htmlFor="grid-password" for="">
                                            NIS
                                        </label>
                                        <input type="text"class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                        value="{{ $showuser->nis }}" placeholder="NIS" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full"
                                            htmlFor="grid-password" for="">
                                            NISN
                                        </label>
                                        <input type="text"class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                        value="{{ $showuser->nisn }}" placeholder="NISN" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Nama Lengkap
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showuser->name }}" placeholder="Nama Lengkap" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label for="" class="block mb-1 text-md font-medium text-gray-700">Posisi team</label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showuser->team_role }}" placeholder="Posisi team" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Nama Sekolah
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showuser->sekolah }}" placeholder="Nama sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Email
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showuser->email }}" placeholder="Email" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Nomor Handphone
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showuser->nomor_hp }}" placeholder="Nomor handphone" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Instagram
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showuser->instagram }}" placeholder="Instagram" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Alamat Rumah
                                        </label>
                                        <textarea id="address" name="" rows="4" class="border border-gray-300 rounded-md w-full" readonly>{{ $showuser->alamat }}</textarea>
                                    </div>
                                </div>
                                @else
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full"
                                            htmlFor="grid-password" for="">
                                            NIS
                                        </label>
                                        <input type="text"class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                        value="" placeholder="NIS" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full"
                                            htmlFor="grid-password" for="">
                                            NISN
                                        </label>
                                        <input type="text"class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                        value="" placeholder="NISN" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Nama Lengkap
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Nama Lengkap" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label for="" class="block mb-1 text-md font-medium text-gray-700">Posisi team</label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Posisi team" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Nama Sekolah
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Nama sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Email
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Email" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Nomor Handphone
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Nomor handphone" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Instagram
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Instagram" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Alamat Rumah
                                        </label>
                                        <textarea id="address" name="" rows="4" class="border border-gray-300 rounded-md w-full" readonly></textarea>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="w-full mx-auto lg:mx-0 bg-white h-[855px] shadow rounded px-3 mt-2 pb-3">
                        <h2 class="text-xl font-semibold mb-4 mt-3">List Member</h2>
                        <div class="bg-gray-200 rounded px-2 overflow-y-auto h-[90%] scrollbar">
                                <h2 class="text-2xl font-semibold my-2">Cari data peserta</h2>
                                <form action="{{ route('data-peserta') }}" method="GET" class="mb-1">
                                    <input
                                        type="text"
                                        name="search"
                                        class="w-full border p-2 rounded"
                                        placeholder="Cari berdasarkan nama, nama tim, atau email..."
                                        value="{{ request('search') }}"
                                    />
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mt-2">Cari</button>
                                </form>
                            <ul class="divide-y divide-gray-300">
                                @foreach ($users as $user)    
                                <li class="py-2">
                                  <div class="flex flex-row justify-between px-2 items-center bg-red-500 text-white rounded shadow">
                                    <div class="flex flex-col w-[70%]">
                                        <span class="font-semibold pb-1">{{ $user->name }}</span>
                                        <span class="">Role: {{ $user->team_role }}</span>
                                        <span class="">Team: {{ $user->team->team_name }}</span>
                                    </div>
                                    <div class="flex flex-col text-right">
                                        <a href="/dashboard/data-peserta?peserta={{ $user->id }}" class="text-green-400 underline font-semibold pb-2">Lihat</a>
                                        <a href="/dashboard/data-peserta?hapus={{ $user->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class="text-red-900 underline font-semibold">Hapus</a>
                                    </div>
                                  </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>
@endsection