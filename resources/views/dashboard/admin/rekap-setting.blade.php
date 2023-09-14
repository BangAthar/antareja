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
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                <i class="fa-solid fa-magnifying-glass mr-2"></i> Rekap Setting Team Lomba
                            </h6>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-2 px-4 py-10 pt-0 justify-between">
                        @if ($showteam && $showpbb)
                            <div class="w-full mx-auto lg:mx-0 h-[80%] bg-white shadow rounded px-3 mt-2 pb-6">
                                <h6 class="text-blueGray-400 pt-3 mb-2 font-bold uppercase">
                                    Lihat data nilai
                                </h6>
                                <div class="w-full flex flex-col mt-2">
                                    <h2 class="font-bold uppercase">statistik team</h2>
                                    <span class="font-medium">- Team : <span
                                            class="font-normal">{{ $showteam->team_name }}</span></span>
                                    <span class="font-medium">- Sekolah : <span
                                            class="font-normal">{{ $showteam->team_school }}</span></span>
                                </div>
                                <div class="w-full flex flex-col mt-2">
                                    <h2 class="font-bold uppercase">TOTAL POINT TEAM</h2>
                                    <span class="font-medium">- Point PBB : <span
                                            class="font-normal">{{ number_format($totalpbb) }}</span></span>
                                    <span class="font-medium">- Point VARIASI : <span
                                            class="font-normal">{{ number_format($totalvariasi) }}</span></span>
                                    <span class="font-medium">- Point FORMASI : <span
                                            class="font-normal">{{ number_format($totalformasi) }}</span></span>
                                    <span class="font-medium">- Point DANPAS : <span
                                            class="font-normal">{{ number_format($totaldanpas) }}</span></span>
                                    <span class="font-medium">- Point PASUKAN : <span
                                            class="font-normal">{{ number_format($totalpasukan) }}</span></span>
                                    <span class="font-medium">- Point KOSTUM & MAKEUP : <span
                                            class="font-normal">{{ number_format($totalkostum) }}</span></span>
                                    <span class="font-medium">- Total Seluruh Point Penilaian : <span
                                            class="font-normal">{{ number_format($allpoint) }}</span></span>
                                </div>
                                <div class="mt-2 w-full">
                                    <div class="font-bold text-md">PENILAIAN :</div>
                                    <button
                                        class="px-5 py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 bg-red-700 tab-button"
                                        data-tab="pbb">
                                        PBB
                                    </button>
                                    <button
                                        class="px-5 py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button"
                                        data-tab="variasi">
                                        VARIASI
                                    </button>
                                    <button
                                        class="px-5 py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button"
                                        data-tab="formasi">
                                        FORMASI
                                    </button>
                                    <button
                                        class="px-5 py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button"
                                        data-tab="danpas">
                                        DANPAS
                                    </button>
                                    <button
                                        class="px-5 py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button"
                                        data-tab="pasukan">
                                        PASUKAN
                                    </button>
                                    <button
                                        class="px-5 py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button"
                                        data-tab="kostum_makeup">
                                        KOTUM & MAKE UP
                                    </button>
                                </div>
                                @if (session()->has('success'))
                                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 alert-box"
                                        role="alert">
                                        <strong class="font-bold">Berhasil diupdate</strong>
                                        <span class="block w-[95%]">{{ session('success') }}</span>
                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                            <i class="fa-solid fa-x cursor-pointer close-button"></i>
                                        </span>
                                    </div>
                                @endif
                                <div class="flex flex-col mt-2 tab-content" id="pbb">
                                    <form action="{{ route('updatenilaipbb', ['team' => $showteam->id]) }}" method="post">
                                        @csrf
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                                    <table class="min-w-full divide-y divide-red-200">
                                                        <thead class="bg-red-300">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    No
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Materi
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Point
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-red-200">
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    1
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Langkah Biasa
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_1 }}"
                                                                        placeholder="Masukan Nilai" name="materi_1" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    2
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Hadap kanan ke langkah biasa
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_2 }}"
                                                                        placeholder="Masukan Nilai" name="materi_2" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    3
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Tiap tiap Banjar 2 kali belok kanan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_3 }}"
                                                                        placeholder="Masukan Nilai" name="materi_3" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    4
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Langkah biasa ke langkah lari
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_4 }}"
                                                                        placeholder="Masukan Nilai" name="materi_4" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    5
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        2x belok kiri (Langkah lari)
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_5 }}"
                                                                        placeholder="Masukan Nilai" name="materi_5" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    6
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Langkah lari ke langkah biasa
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_6 }}"
                                                                        placeholder="Masukan Nilai" name="materi_6" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    7
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Tiap-tiap Banjar 2 kali belok kanan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_7 }}"
                                                                        placeholder="Masukan Nilai" name="materi_7" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    8
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Langkah biasa ke langkah tegap
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_8 }}"
                                                                        placeholder="Masukan Nilai" name="materi_8" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    9
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Hormat kanan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_9 }}"
                                                                        placeholder="Masukan Nilai" name="materi_9" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    10
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Langkah tegap ke Langkah biasa
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_10 }}"
                                                                        placeholder="Masukan Nilai" name="materi_10" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    11
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        2 kali belok kiri
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_11 }}"
                                                                        placeholder="Masukan Nilai" name="materi_11" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    12
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Belok kiri (Langkah biasa)
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_12 }}"
                                                                        placeholder="Masukan Nilai" name="materi_12" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    13
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Ganti Langkah (Proses)
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_13 }}"
                                                                        placeholder="Masukan Nilai" name="materi_13" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    14
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Melintang kiri (Berjalan ke berjalan)
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_14 }}"
                                                                        placeholder="Masukan Nilai" name="materi_14" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    15
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Hadap kiri ke langkah biasa
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_15 }}"
                                                                        placeholder="Masukan Nilai" name="materi_15" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    16
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Langkah biasa ke langkah perlahan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_16 }}"
                                                                        placeholder="Masukan Nilai" name="materi_16" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    17
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Langkah perlahan ke langkah biasa
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_17 }}"
                                                                        placeholder="Masukan Nilai" name="materi_17" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    18
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Hadap kanan ke henti
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_18 }}"
                                                                        placeholder="Masukan Nilai" name="materi_18" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    19
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Hormat
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_19 }}"
                                                                        placeholder="Masukan Nilai" name="materi_19" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    20
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Hitung
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_20 }}"
                                                                        placeholder="Masukan Nilai" name="materi_20" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    21
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Istirahat ditempat
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_21 }}"
                                                                        placeholder="Masukan Nilai" name="materi_21" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    22
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Sikap sempurna
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_22 }}"
                                                                        placeholder="Masukan Nilai" name="materi_22" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    23
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Istirahat ditempat (parade)
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_23 }}"
                                                                        placeholder="Masukan Nilai" name="materi_23" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    24
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Periksa kerapian
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_24 }}"
                                                                        placeholder="Masukan Nilai" name="materi_24" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    25
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Sikap sempurna
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_25 }}"
                                                                        placeholder="Masukan Nilai" name="materi_25" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    26
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Setengah lengan lencang kiri
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_26 }}"
                                                                        placeholder="Masukan Nilai" name="materi_26" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    27
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Lencang kanan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_27 }}"
                                                                        placeholder="Masukan Nilai" name="materi_27" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    28
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Hadap serong kiri
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_28 }}"
                                                                        placeholder="Masukan Nilai" name="materi_28" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    29
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        4 langkah ke belakang
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_29 }}"
                                                                        placeholder="Masukan Nilai" name="materi_29" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    30
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        3 langkah ke kiri
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_30 }}"
                                                                        placeholder="Masukan Nilai" name="materi_30" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    31
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        hadap serong kanan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpbb->materi_31 }}"
                                                                        placeholder="Masukan Nilai" name="materi_31" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="bg-red-500 text-white hover:bg-red-800 font-bold uppercase text-xs py-3 rounded shadow hover:shadow-md outline-none  focus:outline-none ease-linear transition-all duration-150 w-full mt-2"
                                            type="submit">
                                            Simpan perubahan nilai
                                        </button>
                                    </form>
                                </div>
                                <div class="flex flex-col mt-2 tab-content hidden" id="variasi">
                                    <form action="{{ route('updatenilaivariasi', ['team' => $showteam->id]) }}"
                                        method="post">
                                        @csrf
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                                    <table class="min-w-full divide-y divide-red-200">
                                                        <thead class="bg-red-300">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    No
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Materi
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Point
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-red-200">
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    1
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kerapihan dan detail gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showvariasi->materi_1 }}"
                                                                        placeholder="Masukan Nilai" name="materi_1" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    2
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Konsentrasi
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showvariasi->materi_2 }}"
                                                                        placeholder="Masukan Nilai" name="materi_2" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    3
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kreativitas
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showvariasi->materi_3 }}"
                                                                        placeholder="Masukan Nilai" name="materi_3" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    4
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Pembawa gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showvariasi->materi_4 }}"
                                                                        placeholder="Masukan Nilai" name="materi_4" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    5
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Orasi
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showvariasi->materi_5 }}"
                                                                        placeholder="Masukan Nilai" name="materi_5" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    6
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Tema dan konsep gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showvariasi->materi_6 }}"
                                                                        placeholder="Masukan Nilai" name="materi_6" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="bg-red-500 text-white hover:bg-red-800 font-bold uppercase text-xs py-3 rounded shadow hover:shadow-md outline-none  focus:outline-none ease-linear transition-all duration-150 w-full mt-2"
                                            type="submit">
                                            Simpan perubahan nilai
                                        </button>
                                    </form>
                                </div>
                                <div class="flex flex-col mt-2 tab-content hidden" id="formasi">
                                    <form action="{{ route('updatenilaiformasi', ['team' => $showteam->id]) }}"
                                        method="post">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                @csrf
                                                <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                                    <table class="min-w-full divide-y divide-red-200">
                                                        <thead class="bg-red-300">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    No
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Materi
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Point
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-red-200">
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    1
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kerapihan dan detail gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showformasi->materi_1 }}"
                                                                        placeholder="Masukan Nilai" name="materi_1" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    2
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kreativitas, konfigurasi gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showformasi->materi_2 }}"
                                                                        placeholder="Masukan Nilai" name="materi_2" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    3
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Pembawa gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showformasi->materi_3 }}"
                                                                        placeholder="Masukan Nilai" name="materi_3" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    4
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Orasi
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showformasi->materi_4 }}"
                                                                        placeholder="Masukan Nilai" name="materi_4" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    5
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Unsur PBB
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showformasi->materi_5 }}"
                                                                        placeholder="Masukan Nilai" name="materi_5" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    6
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Alur buka dan tutup formasi
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showformasi->materi_6 }}"
                                                                        placeholder="Masukan Nilai" name="materi_6" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    7
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Tema dan konsep gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showformasi->materi_7 }}"
                                                                        placeholder="Masukan Nilai" name="materi_7" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="bg-red-500 text-white hover:bg-red-800 font-bold uppercase text-xs py-3 rounded shadow hover:shadow-md outline-none  focus:outline-none ease-linear transition-all duration-150 w-full mt-2"
                                            type="submit">
                                            Simpan perubahan nilai
                                        </button>
                                    </form>
                                </div>
                                <div class="flex flex-col mt-2 tab-content hidden" id="danpas">
                                    <form action="{{ route('updatenilaidanpas', ['team' => $showteam->id]) }}"
                                        method="post">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                @csrf
                                                <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                                    <table class="min-w-full divide-y divide-red-200">
                                                        <thead class="bg-red-300">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    No
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Materi
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Point
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-red-200">
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    1
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Sikap
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showdanpas->materi_1 }}"
                                                                        placeholder="Masukan Nilai" name="materi_1" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    2
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Intonasi dan artikulasi
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showdanpas->materi_2 }}"
                                                                        placeholder="Masukan Nilai" name="materi_2" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    3
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Ketegasan dan kelantangan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showdanpas->materi_3 }}"
                                                                        placeholder="Masukan Nilai" name="materi_3" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    4
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Penguasa materi
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showdanpas->materi_4 }}"
                                                                        placeholder="Masukan Nilai" name="materi_4" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    5
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Pengusaan lapangan dan pasukan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showdanpas->materi_5 }}"
                                                                        placeholder="Masukan Nilai" name="materi_5" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <button
                                            class="bg-red-500 text-white hover:bg-red-800 font-bold uppercase text-xs py-3 rounded shadow hover:shadow-md outline-none  focus:outline-none ease-linear transition-all duration-150 w-full mt-2"
                                            type="submit">
                                            Simpan perubahan nilai
                                        </button>
                                    </form>
                                </div>
                                <div class="flex flex-col mt-2 tab-content hidden" id="pasukan">
                                    <form action="{{ route('updatenilaipasukan', ['team' => $showteam->id]) }}"
                                        method="post">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                @csrf
                                                <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                                    <table class="min-w-full divide-y divide-red-200">
                                                        <thead class="bg-red-300">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    No
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Materi
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Point
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-red-200">
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    1
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Konsentrasi pasukan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpasukan->materi_1 }}"
                                                                        placeholder="Masukan Nilai" name="materi_1" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    2
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kerapian gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpasukan->materi_2 }}"
                                                                        placeholder="Masukan Nilai" name="materi_2" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    3
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Pembawaan gerakan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpasukan->materi_3 }}"
                                                                        placeholder="Masukan Nilai" name="materi_3" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    4
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Postur tubuh
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpasukan->materi_4 }}"
                                                                        placeholder="Masukan Nilai" name="materi_4" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    5
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kerapian shaf dan banjar (PBB)
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showpasukan->materi_5 }}"
                                                                        placeholder="Masukan Nilai" name="materi_5" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <button
                                            class="bg-red-500 text-white hover:bg-red-800 font-bold uppercase text-xs py-3 rounded shadow hover:shadow-md outline-none  focus:outline-none ease-linear transition-all duration-150 w-full mt-2"
                                            type="submit">
                                            Simpan perubahan nilai
                                        </button>
                                    </form>
                                </div>
                                <div class="flex flex-col mt-2 tab-content hidden" id="kostum_makeup">
                                    <form action="{{ route('updatenilaikostum', ['team' => $showteam->id]) }}"
                                        method="post">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                @csrf
                                                <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                                    <table class="min-w-full divide-y divide-red-200">
                                                        <thead class="bg-red-300">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    No
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Materi
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-md font-medium text-gray-600 uppercase tracking-wider">
                                                                    Point
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-red-200">
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    1
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kenyamanan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showkostum->materi_1 }}"
                                                                        placeholder="Masukan Nilai" name="materi_1" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    2
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kesesuaian Tema dengan Hiasan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showkostum->materi_2 }}"
                                                                        placeholder="Masukan Nilai" name="materi_2" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    3
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Kerapihan dan keindahan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showkostum->materi_3 }}"
                                                                        placeholder="Masukan Nilai" name="materi_3" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    4
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Body Fitting
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showkostum->materi_4 }}"
                                                                        placeholder="Masukan Nilai" name="materi_4" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    5
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <div class="whitespace-normal break-words">
                                                                        Etika dan kesopanan
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number"
                                                                        class="placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow ease-linear transition-all duration-150"
                                                                        value="{{ $showkostum->materi_5 }}"
                                                                        placeholder="Masukan Nilai" name="materi_5" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <button
                                            class="bg-red-500 text-white hover:bg-red-800 font-bold uppercase text-xs py-3 rounded shadow hover:shadow-md outline-none  focus:outline-none ease-linear transition-all duration-150 w-full mt-2"
                                            type="submit">
                                            Simpan perubahan nilai
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="w-full mx-auto lg:mx-0 h-[80%] bg-white shadow rounded px-3 mt-2 pb-6">
                                @if (session()->has('success'))
                                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 alert-box"
                                        role="alert">
                                        <strong class="font-bold">Berhasil diupdate</strong>
                                        <span class="block w-[95%]">{{ session('success') }}</span>
                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                            <i class="fa-solid fa-x cursor-pointer close-button"></i>
                                        </span>
                                    </div>
                                @endif
                                <h6 class="text-black text-center mt-5 pt-3 mb-2 font-bold uppercase underline">
                                    Pilih team terlebih dahulu untuk menilai semua materi <br>
                                    atau <br>
                                    Unlock nilai agar settingan nilai bisa di edit
                                </h6>
                            </div>
                        @endif
                        <div class="w-full mx-auto lg:mx-0 bg-white shadow rounded px-3 mt-2 pb-3">
                            <h2 class="text-xl font-semibold mb-4 mt-3">List Teams</h2>

                            <div class="bg-gray-200 rounded px-2 overflow-y-auto h-[450px] scrollbar">
                                <ul class="divide-y divide-gray-300">
                                    @foreach ($teams as $team)
                                        <li class="py-2">
                                            <div
                                                class="flex flex-row justify-between px-2 items-center bg-red-500 text-white rounded shadow">
                                                <div class="flex flex-col w-[70%]">
                                                    <span class="font-semibold pb-1">{{ $team->team_name }}</span>
                                                    <span class="">Sekolah: {{ $team->team_school }}</span>
                                                </div>
                                                <div class="flex flex-col text-right">
                                                    @if ($team->is_unlocknilai == 1)
                                                        <a href="/dashboard/rekapnilai-setting?team={{ $team->id }}"
                                                            class="text-green-400 underline font-semibold pb-2">Edit</a>
                                                    @else
                                                        <span class="text-black uppercase font-bold pb-2">terkunci</span>
                                                    @endif

                                                    @if ($team->is_unlocknilai == 1)
                                                        <span class="text-white font-semibold pb-2">Sudah di unlock</span>
                                                    @else
                                                        <form action="{{ route('unlocknilai', ['unlock' => $team->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button class="text-white underline font-semibold pb-2">Unlock
                                                                Nilai</button>
                                                        </form>
                                                    @endif

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
