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
    <div class="flex flex-wrap mt-4">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700 uppercase">
                                <i class="fa-solid fa-bullhorn mr-2"></i> Informasi Antareja
                            </h3>
                        </div>
                        <div class="relative w-full max-w-full flex flex-col gap-2">
                            <hr class="my-4 md:min-w-full" />
                            {{-- Annoucement Card --}}
                            @if ($infos->count())
                                @php $counter = 0; @endphp
                                @foreach ($infos as $info)
                                    @if ($counter < 3)
                                        <div class="bg-red-500 w-90 rounded text-white py-3 px-8">
                                            <div class="flex flex-wrap items-center">
                                                <div class="relative w-full max-w-full flex-grow flex-1">
                                                    <span class="text-white text-sm font-medium"><i class="fa-solid fa-user"></i>
                                                        {{ $info->author->name }}</span>
                                                </div>
                                                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                                    <span class="text-gray-200 text-sm font-medium text-right">{{ $info->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                            <hr class="my-1 md:min-w-full" />
                                            <div class="relative w-[95%] max-w-[95%]">
                                                <div class="text-white text-sm font-medium">
                                                    {!! $info->pesan !!}
                                                </div>
                                            </div>
                                        </div>
                                @php $counter++; @endphp
                                    @else
                                        @break
                                    @endif
                                @endforeach
                            @else
                            <div class="font-semibold text-md my-[12%] text-center">
                                Pengumuman atau Informasi belum tersedia
                            </div>
                            @endif
                        </div>
                    </div>
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
                            <div class="relative w-full max-w-full mb-1">
                                <div class="text-white text-sm font-medium pb-1">Dava Pasya : <a
                                        href="https://wa.me/6281252518787" class="underline">+6281252518787</a></div>
                                <div class="text-white text-sm font-medium">Satria Adjie : <a
                                        href="https://wa.me/6282132582733" class="underline">+6282132582733</a></div>
                                <hr class="my-4 md:min-w-full" />
                                <a href="/dashboard/buku-panduan" class="text-white text-sm px-2 py-3 bg-indigo-500 font-semibold rounded shadow">Cek buku panduan kami!</a>
                            </div>
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
