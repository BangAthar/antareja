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
<div class="px-4 md:px-10 mx-auto w-full -m-24 h-full">
    <div class="w-full mt-4">
        <div class="w-full mx-auto mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700 uppercase">
                                <i class="fa-solid fa-book mr-2"></i></i></i> JUKLAK LKBB ANTAREJA
                            </h3>
                        </div>
                        <div class="relative w-full max-w-full mt-3">
                            <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
                                <div class="w-full max-w-2xl">
                                    <embed src="https://drive.google.com/file/d/1W_Q9dQBvR5TnDreYKWIz4h9kboNLTEQ_/preview" type="application/pdf" class="w-full h-screen"></embed>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>
@endsection