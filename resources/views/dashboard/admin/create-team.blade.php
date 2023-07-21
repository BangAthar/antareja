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
<div class="px-4 md:px-10 mx-auto w-full -m-24 h-full">
    <div class="w-full lg:w-[90%] mt-16 mb-[20%]">
        <div class="mx-auto mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700 uppercase">
                                <i class="fa-solid fa-plus mr-2"></i> Tambahkan team baru
                            </h3>
                        </div>
                        <div class="relative w-full max-w-full flex flex-col gap-2">
                                <form action="/dashboard/create-team" method="POST" class="space-y-4">
                                  @csrf
                                  @if (session()->has('success'))
                                     <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 alert-box" role="alert">
                                        <strong class="font-bold">Berhasil ditambahkan!</strong>
                                        <span class="block w-[95%]">Team berhasil ditambahkan!</span>
                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <i class="fa-solid fa-x cursor-pointer close-button"></i>
                                        </span>
                                     </div>
                                  @endif
                                  <div>
                                    <label for="team_name" class="block font-semibold mb-2">Masukan team yg ditambahkan</label>
                                    <input id="team_name" type="text" name="team_name" required class="px-4 py-2 border border-gray-300 rounded w-full" placeholder="Input disini">
                                  </div>
                              
                                  <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2">Tambahkan</button>
                                  </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>
@endsection