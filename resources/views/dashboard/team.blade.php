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
                                        INFORMASI LOMBA
                                    </h5>
                                    <a href="/dashboard/informasi"
                                        class="py-2 px-2 bg-indigo-500 text-white font-semibold text-sm underline rounded hover:drop-shadow-xl transition ease">
                                        <i class="fa-solid fa-scroll text-sm mr-1"></i> Informasi
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
                                        REKAPAN NILAI
                                    </h5>
                                    <a href="/dashboard/rekapan-nilai"
                                        class="py-2 px-2 bg-indigo-500 text-white font-semibold text-sm underline rounded hover:drop-shadow-xl transition ease">
                                        <i class="fa-regular fa-folder text-sm mr-1"></i> Rekap Nilai
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
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-8/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                Team Setting
                            </h6>
                            <form method="POST" action="/dashboard/team-setting">
                                @csrf
                                @if (strtoupper($user->team_role) !== 'PASUKAN')
                                    <button
                                        class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="submit">
                                        Simpan
                                    </button>
                                @endif
                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informasi Team
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password" for="team_name">
                                        Nama Team
                                    </label>
                                    @if (strtoupper($user->team_role) === 'PASUKAN')
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_name }}" placeholder="Masukan Nama Team" readonly />
                                    @else
                                        <input type="text" id="team_name" name="team_name"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_name }}" placeholder="Masukan Nama Team" readonly/>
                                    @endif
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password" for="team_school">
                                        Nama Sekolah
                                    </label>
                                    @if (strtoupper($user->team_role) === 'PASUKAN')
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school }}" placeholder="Masukan nama sekolah" readonly />
                                    @else
                                        <input type="text" id="team_school" name="team_school"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school }}" placeholder="Masukan nama sekolah" />
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300" />

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informasi Sekolah
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password" for="team_school_address">
                                        Alamat Sekolah
                                    </label>
                                    @if (strtoupper($user->team_role) === 'PASUKAN')
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_address }}" placeholder="Masukan alamat sekolah"
                                            readonly />
                                    @else
                                        <input type="text" id="team_school_address" name="team_school_address"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_address }}"
                                            placeholder="Masukan alamat sekolah" />
                                    @endif
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password" for="team_school_province">
                                        Provinsi
                                    </label>
                                    @if (strtoupper($user->team_role) === 'PASUKAN')
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_province }}"
                                            placeholder="Masukan provinsi sekolah" readonly />
                                    @else
                                        <input type="text" id="team_school_province" name="team_school_province"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_province }}"
                                            placeholder="Masukan provinsi sekolah" />
                                    @endif
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password" for="team_school_city">
                                        Kota
                                    </label>
                                    @if (strtoupper($user->team_role) === 'PASUKAN')
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_city }}" placeholder="Masukan kota sekolah"
                                            readonly />
                                    @else
                                        <input type="text" id="team_school_city" name="team_school_city"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_city }}" placeholder="Masukan kota sekolah" />
                                    @endif
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password" for="team_school_postal">
                                        Kode Pos
                                    </label>
                                    @if (strtoupper($user->team_role) === 'PASUKAN')
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_postal }}"
                                            placeholder="Masukan kode pos sekolah" readonly />
                                    @else
                                        <input type="text" id="team_school_postal" name="team_school_postal"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            value="{{ $team->team_school_postal }}"
                                            placeholder="Masukan kode pos sekolah" />
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-full xl:w-4/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700 uppercase">
                                    <i class="fa-regular fa-circle-question mr-2"></i> Butuh Bantuan?
                                </h3>
                            </div>
                        </div>
                        <hr class="my-4 md:min-w-full" />
                        <div class="relative w-full max-w-full">
                            <div class="bg-red-500 w-90 rounded text-white py-3 px-8">
                                <div class="relative w-full max-w-full">
                                    <div class="text-white text-sm font-medium pb-1">Dava Pasya : <a
                                            href="https://wa.me/6281252518787" class="underline">+6281252518787</a></div>
                                    <div class="text-white text-sm font-medium">Satria Adjie : <a
                                            href="https://wa.me/6282132582733" class="underline">+6282132582733</a></div>
                                    <hr class="my-4 md:min-w-full" />
                                    <div class="text-white text-sm font-medium pb-1">Instagram : <a
                                            href="https://www.instagram.com/lkbb.antareja/"
                                            class="underline">@lkbb.antareja</a></div>
                                    <div class="text-white text-sm font-medium">Email : <a href="mailto:antareja@smktelkom-mlg.sch.id"
                                            class="underline">antareja@smktelkom-mlg.sch.id</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
    </div>
@endsection
