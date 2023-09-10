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
                            <i class="fa-solid fa-magnifying-glass mr-2"></i> Cari data team Antareja
                        </h6>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 px-4 py-10 pt-0 justify-between">
                    <div class="w-full mx-auto lg:mx-0 h-[80%] bg-white shadow rounded px-3 mt-2 pb-6">
                        <form method="POST" accept="">
                            <h6 class="text-blueGray-400 pt-3 mb-6 font-bold uppercase">
                                Lihat data team
                            </h6>

                            {{-- TABEL DIBAWAH INI HANYA BERFUNGSI UNTUK MELIHAT DATA PESERTA, ADMIN TIDAK DAPAT MENGHUBAH HANYA BISA MENGHAPUS --}}

                            <div class="flex flex-col">
                                @if ($showteam)
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full"
                                            htmlFor="grid-password" for="">
                                            Nama Team
                                        </label>
                                        <input type="text"class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                        value="{{ $showteam->team_name }}" placeholder="Nama Team" name="" readonly/>
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
                                            value="{{ $showteam->team_school }}" placeholder="Nama Sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Alamat Sekolah
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showteam->team_school_address }}" placeholder="Alamat sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Provinsi
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showteam->team_school_province }}" placeholder="Provinsi Sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Kota
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showteam->team_school_city }}" placeholder="Kota sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Kode Pos
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="{{ $showteam->team_school_postal }}" placeholder="Kode Pos sekolah" name="" readonly/>
                                    </div>
                                </div>

                                {{-- DATA PEMBAYARAN --}}

                                <div class="text-blueGray-400 pt-3 font-bold uppercase">DATA PEMBAYARAN</div>
                                @if ($showteam->is_verified == 0)    
                                <div class="flex flex-col mt-2">
                                    <span class="font-semibold text-blueGray-600">Tombol verifikasi jika team terkonfirmasi telah membayar :</span>
                                    <form action="" method="post">
                                        @csrf
                                        <button class="px-2 py-2 mx-auto mt-1 bg-green-600 w-[98%] text-white font-semibold rounded shadow-green-600" onclick="return confirm('Apakah Anda yakin team ini sudah terkonfirmasi membayar?')">Verifikasi Team <span>{{ $showteam->team_name }}</span></button>
                                    </form>
                                </div>
                                @endif
                                <div class="my-5 w-full h-[2px] rounded-xl bg-gray-600 md:min-w-full"></div>
                                <div class="flex flex-wrap">
                                    <span class="font-semibold text-blueGray-600 px-2">TIPE PEMBAYARAN :</span>
                                    <div class="text-md font-semibold text-green-700 ml-2">{{ $showteam->team_school_payment }}</div>
                                </div>
                                <div class="flex flex-wrap">
                                    <span class="font-semibold text-blueGray-600 px-2">TIPE SEKOLAH :</span>
                                    <div class="text-md font-semibold text-green-700 ml-2">{{ $showteam->team_school_type }}</div>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-semibold text-blueGray-600 px-2">STATUS PEMBAYARAN :</span>
                                    @if ($showteam->is_verified == 0)
                                    
                                    <div class="w-[98%] mx-auto py-2 bg-red-600 font-bold text-white text-center rounded mt-1">PEMBAYARAN BELUM DI VERIFIKASI</div>
                                    @else
                                    <div class="w-[98%] mx-auto py-2 bg-green-600 font-bold text-white text-center rounded mt-1">PEMBAYARAN SUDAH DI VERIFIKASI</div>
                                    @endif
                                </div>
                                <div class="flex flex-col mt-1">
                                    <span class="font-semibold text-blueGray-600 px-2">BUKTI PEMBAYARAN :</span>
                                    <img src="{{ asset('storage/' . $showteam->team_payment_proof) }}" class="rounded shadow-sm mt-1" alt="" srcset="">
                                </div>
                                @else
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full"
                                            htmlFor="grid-password" for="">
                                            Nama Team
                                        </label>
                                        <input type="text"class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                        value="" placeholder="Nama Team" name="" readonly/>
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
                                            value="" placeholder="Nama Sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Alamat Sekolah
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Alamat sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Provinsi
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Provinsi Sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Kota
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Kota sekolah" name="" readonly/>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password" for="">
                                            Kode Pos
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150"
                                            value="" placeholder="Kode Pos sekolah" name="" readonly/>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="w-full mx-auto lg:mx-0 bg-white shadow rounded px-3 mt-2 pb-3">
                        <h2 class="text-xl font-semibold mb-4 mt-3">List Teams</h2>
                        <div class="bg-gray-200 rounded px-2 overflow-y-auto h-[90%] scrollbar">
                            <h2 class="text-2xl font-semibold my-2">Cari data team</h2>
                            <form action="{{ route('data-team') }}" method="GET" class="mb-1">
                                <input
                                    type="text"
                                    name="search"
                                    class="w-full border p-2 rounded"
                                    placeholder="Cari berdasarkan nama tim atau nama sekolah..."
                                    value="{{ request('search') }}"
                                />
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mt-2">Cari</button>
                            </form>
                            <ul class="divide-y divide-gray-300">
                                @foreach ($teams as $team)
                                <li class="py-2">
                                  <div class="flex flex-row justify-between px-2 items-center bg-red-500 text-white rounded shadow">
                                    <div class="flex flex-col w-[70%]">
                                        <span class="font-semibold pb-1">{{ $team->team_name }}</span>
                                        <span class="">Sekolah: {{ $team->team_school }}</span>
                                    </div>
                                    <div class="flex flex-col text-right">
                                        <a href="/dashboard/data-team?team={{ $team->id }}" class="text-green-400 underline font-semibold pb-2">Lihat</a>
                                        <a href="/dashboard/data-team?hapus={{ $team->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus team ini?')" class="text-red-900 underline font-semibold">Hapus</a>
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