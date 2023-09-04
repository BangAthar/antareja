@extends('dashboard.layouts.main')
@section('container')
<div class="relative bg-red-500 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
        <!-- Card stats -->
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                    TOTAL TEAMS
                                </h5>
                                <span class="font-semibold text-xl text-blueGray-700">
                                    {{ $totalTeams }}
                                </span>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                    <i class="fa-solid fa-people-group"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-blueGray-400 mt-4">
                            <span class="whitespace-nowrap"> {{ $lastTeam->created_at->diffForHumans() }} </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                    TOTAL MEMBERS
                                </h5>
                                <span class="font-semibold text-xl text-blueGray-700">
                                    {{ $totalMembers }}
                                </span>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-blueGray-400 mt-4">
                            <span class="whitespace-nowrap"> {{ $lastUser->created_at->diffForHumans() }} </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 mb-5">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs mb-5">
                                    ATUR TEAM DISINI
                                </h5>
                                <a href="/dashboard/team-setting"
                                    class="py-2 px-2 bg-indigo-500 text-white font-semibold text-sm underline rounded hover:drop-shadow-xl transition ease">
                                    <i class="fas fa-tools text-sm mr-1"></i> EDIT TEAM
                                </a>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4 mb-5">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs mb-5">
                                    ATUR PESERTA DISINI
                                </h5>
                                <a href="/dashboard/member-setting"
                                    class="py-2 px-2 bg-indigo-500 text-white font-semibold text-sm underline rounded hover:drop-shadow-xl transition ease">
                                    <i class="fas fa-tools text-sm mr-1"></i> EDIT MEMBER
                                </a>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($teamVerified->is_verified == 0)
<div class="px-4 md:px-10 mx-auto w-full -m-24 h-full">
    <div class="flex flex-col mt-4">
        <div class="w-full mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700 uppercase">
                                <i class="fa-solid fa-file-invoice mr-2"></i> Payment Confirmation
                            </h3>
                        </div>
                        <hr class="my-4 md:min-w-full" />
                        <div class="relative w-full max-w-full flex flex-col gap-2 my-[10%]">
                            
                            <div class="flex flex-col md:flex-row mx-auto">
                                <svg aria-hidden="true" class="mx-auto inline w-7 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="mt-1 ml-2 font-bold text-red-700 text-sm md:font-xl text-center">SEDANG PROSES VERIFIKASI</span>
                            </div>
                            <div class="font-semibold text-md mt-3 text-center">
                                Anda belum dapat mengakses aplikasi Antareja, karena tim anda sedang dalam proses verifikasi pembayaran
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>
@else
<div class="px-4 md:px-10 mx-auto w-full -m-24 h-full">
    <div class="w-full mt-4">
        <div class="mx-auto mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700 uppercase">
                                 Hasil Penilaian Lomba
                            </h3>
                        </div>
                        <hr class="my-4 md:min-w-full" />
                        <div class="relative w-full max-w-full flex flex-col">
                            <div class="w-full flex flex-col mt-2">
                                <h2 class="font-bold uppercase">statistik team</h2>
                                <span class="font-medium">- Team : <span class="font-normal">{{ $team->team_name }}</span></span>
                                <span class="font-medium">- Sekolah : <span class="font-normal">{{ $team->team_school }}</span></span>
                            </div>
                            <div class="mt-2 w-full">
                                <div class="font-bold text-md">PENILAIAN :</div>
                                <button class="px-5 py-2 md:px-10 md:py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 bg-red-700 tab-button" data-tab="pbb">
                                    PBB
                                </button>
                                <button class="px-5 py-2 md:px-10 md:py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button" data-tab="variasi">
                                    VARIASI
                                </button>
                                <button class="px-5 py-2 md:px-10 md:py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button" data-tab="formasi">
                                    FORMASI
                                </button>
                                <button class="px-5 py-2 md:px-10 md:py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button" data-tab="gerakan_tambahan">
                                    GERAKAN TAMBAHAN
                                </button>
                                <button class="px-5 py-2 md:px-10 md:py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button" data-tab="danpas">
                                    DANPAS
                                </button>
                                <button class="px-5 py-2 md:px-10 md:py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button" data-tab="pasukan">
                                    PASUKAN
                                </button>
                                <button class="px-5 py-2 md:px-10 md:py-2 mt-2 rounded shadow-md text-white font-medium hover:bg-red-700 transition-all bg-red-500 tab-button" data-tab="kostum_makeup">
                                    KOTUM & MAKE UP
                                </button>
                            </div>

                            @if ($pbb)
                            <div class="flex flex-col mt-2 tab-content" id="pbb">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="px-2 py-2 text-center text-white font-semibold bg-indigo-500 rounded mb-2">
                                            Total Point Penilaian PBB : {{ number_format($totalpbb, 0) }}<br>
                                        </div>
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
                                                            {{ $pbb->materi_1 }}
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
                                                            {{ $pbb->materi_2 }}
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
                                                            {{ $pbb->materi_3 }}
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
                                                            {{ $pbb->materi_4 }}
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
                                                            {{ $pbb->materi_5 }}
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
                                                            {{ $pbb->materi_6 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            7
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Tiap-tiap Banjar 2 kali belok kiri
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_7 }}
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
                                                            {{ $pbb->materi_8 }}
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
                                                            {{ $pbb->materi_9 }}
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
                                                            {{ $pbb->materi_10 }}
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
                                                            {{ $pbb->materi_11 }}
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
                                                            {{ $pbb->materi_12 }}
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
                                                            {{ $pbb->materi_13 }}
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
                                                            {{ $pbb->materi_14 }}
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
                                                            {{ $pbb->materi_15 }}
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
                                                            {{ $pbb->materi_16 }}
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
                                                            {{ $pbb->materi_17 }}
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
                                                            {{ $pbb->materi_18 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            19
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Hormat tangan
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_19 }}
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
                                                            {{ $pbb->materi_20 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            21
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Istirahat ditempat (parade) ke sikap sempurna
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_21 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            22
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Periksa kerapian
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_22 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            23
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Sikap sempurna
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_23 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            24
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Hadap serong kiri
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_24 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            25
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                4 langkah ke belakang
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_25 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            26
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                3 langkah ke kiri
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_26 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            27
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Hadap serong kanan
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_27 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            28
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Setengah lengan lencang kiri
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_28 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            29
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Lencang kanan
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pbb->materi_29 }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col mt-2 tab-content" id="pbb">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                            DATA BELUM DIMASUKAN OLEH PANITIA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($variasi)
                            <div class="flex flex-col mt-2 tab-content hidden" id="variasi">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="px-2 py-2 text-center text-white font-semibold bg-indigo-500 rounded mb-2">
                                            Total Point Penilaian VARIASI : {{ number_format($totalvariasi, 0) }}
                                        </div>
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
                                                                Kreativitas
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $variasi->materi_1 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            2
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Kerapian shaf dan banjar
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $variasi->materi_2 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            3
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Kekompakan dan keseragaman
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $variasi->materi_3 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            4
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Tema dan konsep
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $variasi->materi_4 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            5
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Semangat
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $variasi->materi_5 }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col mt-2 tab-content hidden" id="variasi">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                            DATA BELUM DIMASUKAN OLEH PANITIA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($formasi)
                            <div class="flex flex-col mt-2 tab-content hidden" id="formasi">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="px-2 py-2 text-center text-white font-semibold bg-indigo-500 rounded mb-2">
                                            Total Point Penilaian FORMASI : {{ number_format($totalformasi, 0) }}
                                        </div>
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
                                                                Proses buka formasi
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $formasi->materi_1 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            2
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Kreativitas gerakan
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $formasi->materi_2 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            3
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Penggunaan lapangan
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $formasi->materi_3 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            4
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Proses tutup formasi
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $formasi->materi_4 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            5
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Semangat
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $formasi->materi_5 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            6
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Unsur PBB
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $formasi->materi_6 }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col mt-2 tab-content hidden" id="formasi">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                            DATA BELUM DIMASUKAN OLEH PANITIA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($gertam)
                            <div class="flex flex-col mt-2 tab-content hidden" id="gerakan_tambahan">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="px-2 py-2 text-center text-white font-semibold bg-indigo-500 rounded mb-2">
                                            Total Point Penilaian GERAKAN TAMBAHAN : {{ number_format($totalgertam, 0) }}
                                        </div>
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
                                                                Bubar
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $gertam->materi_1 }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col mt-2 tab-content hidden" id="gerakan_tambahan">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                            DATA BELUM DIMASUKAN OLEH PANITIA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($danpas)
                            <div class="flex flex-col mt-2 tab-content hidden" id="danpas">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="px-2 py-2 text-center text-white font-semibold bg-indigo-500 rounded mb-2">
                                            Total Point Penilaian DANPAS : {{ number_format($totaldanpas, 0) }}
                                        </div>
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
                                                            {{ $danpas->materi_1 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            2
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Ketegasan dan kelantangan
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $danpas->materi_2 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            3
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Intonasi
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $danpas->materi_3 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            4
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Artikulasi
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $danpas->materi_4}}
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
                                                            {{ $danpas->materi_5 }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col mt-2 tab-content hidden" id="danpas">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                            DATA BELUM DIMASUKAN OLEH PANITIA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif                            
                            
                            @if ($pasukan)
                            <div class="flex flex-col mt-2 tab-content hidden" id="pasukan">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="px-2 py-2 text-center text-white font-semibold bg-indigo-500 rounded mb-2">
                                            Total Point Penilaian PASUKAN : {{ number_format($totalpasukan, 0) }}
                                        </div>
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
                                                            {{ $pasukan->materi_1 }}
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
                                                            {{ $pasukan->materi_2 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                           3
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Semangat
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pasukan->materi_3 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            4
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Kekompakan
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pasukan->materi_4 }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            5
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="whitespace-normal break-words">
                                                                Kerapian shaf dan banjar
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $pasukan->materi_5 }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col mt-2 tab-content hidden" id="pasukan">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                            DATA BELUM DIMASUKAN OLEH PANITIA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            @if ($kostum)
                            <div class="flex flex-col mt-2 tab-content hidden" id="kostum_makeup">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="px-2 py-2 text-center text-white font-semibold bg-indigo-500 rounded mb-2">
                                            Total Point Penilaian KOSTUM & MAKEUP : {{ number_format($totalkostum, 0) }}
                                        </div>
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
                                                            {{ $kostum->materi_1 }}
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
                                                            {{ $kostum->materi_2 }}
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
                                                            {{ $kostum->materi_3 }}
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
                                                            {{ $kostum->materi_4 }}
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
                                                            {{ $kostum->materi_5 }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col mt-2 tab-content hidden" id="kostum_makeup">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow-md overflow-hidden border border-red-200 rounded-lg">
                                            DATA BELUM DIMASUKAN OLEH PANITIA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>
@endif

@endsection