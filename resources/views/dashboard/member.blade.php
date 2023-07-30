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
        <div class="flex flex-col w-full">
            <div class="w-full px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                Member setting
                            </h6>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-2 px-4 py-10 pt-0 justify-between">
                        <div class="w-full mx-auto lg:mx-0 h-[80%] bg-white shadow rounded px-3 mt-2">
                            <form method="POST" action="{{ route('updateMember', ['id' => $member->id]) }}">
                                @csrf
                                <h6 class="text-blueGray-600 text-sm pt-3 mb-6 font-bold uppercase">
                                   Edit Peserta {{ $member->name }}
                                </h6>

                                  @if (session()->has('success'))
                                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                                      <strong class="font-bold">Berhasil diupdate</strong>
                                      <span class="block w-[95%]">Data member dibawah berhasil diupdate!</span>
                                      <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                      <i class="fa-solid fa-x cursor-pointer close-button"></i>
                                      </span>
                                    </div>
                                  @endif
                                <div class="flex flex-col">
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full" for="nis">
                                                NIS
                                            </label>
                                            <input type="number" name="nis"
                                                class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('nis') border-red-500 @enderror"
                                                value="{{ isset($member) ? $member->nis : old('nis') }}" placeholder="Masukan nis" />
                                                @error('nis')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                            
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 w-full" for="nisn">
                                                NISN
                                            </label>
                                            <input type="number" name="nisn"
                                                class="border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('nisn') border-red-500 @enderror"
                                                value="{{ isset($member) ? $member->nisn : old('nisn') }}" placeholder="Masukan nisn" />
                                                @error('nisn')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                            
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="name">
                                                Nama Lengkap
                                            </label>
                                            <input type="text" name="name"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('name') border-red-500 @enderror"
                                                value="{{ isset($member) ? $member->name : old('name') }}" placeholder="Masukan nama lengkap" />
                                                @error('name')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="sekolah">
                                                Nama Sekolah
                                            </label>
                                            <input type="text" name="sekolah"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('sekolah') border-red-500 @enderror"
                                                value="{{ isset($member) ? $member->sekolah : old('sekolah') }}" placeholder="Masukan nama sekolah" />
                                                @error('sekolah')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="email">
                                                Email
                                            </label>
                                            <input type="email" name="email"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('email') border-red-500 @enderror"
                                                value="{{ isset($member) ? $member->email : old('email') }}" placeholder="Masukan email" />
                                                @error('email')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="nomor_hp">
                                                Nomor Handphone
                                            </label>
                                            <input type="number" name="nomor_hp"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('nomor_hp') border-red-500 @enderror"
                                                value="{{ isset($member) ? $member->nomor_hp : old('nomor_hp') }}" placeholder="Masukan nomor handphone" />
                                                @error('nomor_hp')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="instagram">
                                                Instagram
                                            </label>
                                            <input type="text" name="instagram"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('instagram') border-red-500 @enderror"
                                                value="{{ isset($member) ? $member->instagram : old('instagram') }}" placeholder="Masukan instagram" />
                                                @error('instagram')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="alamat">
                                                Alamat Rumah
                                            </label>
                                            <textarea id="alamat" name="alamat" rows="4"
                                                class="border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500 @error('alamat') border-red-500 @enderror">{{ isset($member) ? $member->alamat : old('alamat') }}</textarea>
                                                @error('alamat')
                                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 mb-3">
                                        Simpan Data
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                        <div class=" mx-auto lg:mx-0 bg-white shadow rounded px-3 w-full mt-2 pb-3">
                            <h2 class="text-xl font-semibold mb-4 mt-3">List Member</h2>
                            <ul class="divide-y divide-gray-300">
                                @foreach ($teamMembers as $member)
                                    <li class="py-2">
                                        <div class="flex flex-row justify-between px-2 py-2 items-center bg-red-500 text-white rounded shadow">
                                            <span class="font-semibold w-[50%]">{{ $member->name }}</span>
                                            <span class="">Role: {{ $member->team_role }}</span>
                                            <a href="{{ route('editMember', ['id' => $member->id]) }}" class="text-yellow-400 underline">Edit</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
    </div>
@endsection
