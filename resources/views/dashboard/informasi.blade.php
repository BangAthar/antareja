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
<div class="px-4 md:px-10 mx-auto w-full -m-24 h-full">
    <div class="w-full mt-4">
        <div class="mx-auto mb-12 xl:mb-0 px-4">
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
                            @if ($infos->count())
                            @foreach ($infos as $info)    
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
    </div>
    @include('partials.footer')
</div>
@endsection