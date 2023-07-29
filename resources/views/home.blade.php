@extends('layouts.main')

@section('container')
    <section class="w-full h-full pb-28 bg-transparent" id="beranda">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="flex sm:flex-col flex-col md:flex-row justify-content-between mt-12 items-center">
                <img src="{{ asset('img/rectangle.svg') }}" alt="kotak merah"
                    class="absolute lg:block lg:right-[50%] lg:top-[-45%] md:right-[40%] md:top-[-50%] md:block hidden w-[950px]">
                <div class="w-full md:w-3/5 z-10 text-center md:text-left">
                    <h1 class="font-bold text-6xl sm:text-gray-800 md:text-white text-gray-800">LKBB Antareja</h1>
                    <p
                        class="font-medium mx-auto mb-14 md:mb-14 md:mx-0 pt-5 w-3/5 sm:text-gray-800 md:text-white text-gray-800">
                        Selamat datang di website official lomba keterampilan bari - berbaris dari Paskibra SMK Telkom
                        Malang</p>
                    <a href="https://forms.gle/9qSU9jSyiEVAAs5K6"
                        class="px-4 py-4 bg-red-500 md:bg-white rounded font-medium shadow-xl transition ease text-white md:text-red-500 hover:bg-transparent hover:text-red-500 md:hover:text-white hover:outline outline-offset-2 outline-2">Daftar
                        Sekarang!</a>
                </div>
                <div class="">
                    <img src="{{ asset('img/piala.png') }}" alt="gambar piala" class="w-5/6 sm:w-8/12 lg:w-10/12 mx-auto">
                    <h1 class="text-4xl font-bold text-center text-gray-500">Rebut <span class="text-red-600">70+</span>
                        Tropi <span class="text-red-600">Antareja</span></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-full pb-16 bg-red-500 mt-12" id="antareja">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-content-between items-center pt-20">
                <div class="container text-center md:text-left">
                    <img src="{{ asset('img/antarejalogo2.png') }}" alt="antarejalogo2" class="w-[70%] mx-auto md:mx-0">
                    <h1 class="font-mortend text-capitalize text-white text-2xl md:text-3xl mt-0 ml-0 md:mt-5 md:ml-24">ANTAREJA</h1>
                </div>
                <div class="container mt-16 md:mt-0">
                    <h1 class="text-capitalize text-white text-4xl md:text-5xl text-center font-mortend">ANTAREJA</h1>
                    <h2 class="text-red-200 text-center text-xl md:text-2xl font-bold m-2 underline">Aksi Telkom Barisan Jawara</h2>
                    <p class="text-gray-200 text-lg md:text-xl text-center font-medium mt-5 mx-auto">Antareja merupakan tokoh
                        pewayangan yang memiliki sifat rela berkorban dan memiliki rasa percaya besar. </p>
                    <p class="text-gray-200 text-xl text-center font-medium mt-2 mx-auto">Sedangkan Jawara memiliki makna
                        sang juara yang dipandang hebat. Inti dibalik semua usnur Antareja adalah barisan yang beraksi
                        dengan penuh semangat dan percaya bahwa menjadi sang pemenang yang dipandang hebat.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-full pb-16 bg-transparent" id="">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="flex flex-col justify-content-between mt-16">
                <div class="text-gray-800 text-3xl md:text-4xl">Team Juri</div>
                <div class="text-red-500 text-4xl md:text-5xl font-semibold pt-3">LKBB Antareja</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-10 text-center md:text-center lg:text-left">
                <div class="w-full p-4">
                    <div class="bg-[#f85b5b] shadow-nopal rounded-lg overflow-hidden h-full w-[250px] sm:w-[250px] mx-auto md:mx-auto lg:mx-0 text-white">
                        <div class="w-[85%] h-[288px] mx-auto relative mt-5 rounded-md bg-[#732a2a] overflow-hidden">
                            <img src="{{ asset('img/juri1.png') }}" alt="Team Member" class="w-full h-full object-cover">
                        </div>
                        <div class="py-4 text-center bg-[#732a2a] h-full mt-5">
                            <h3 class="text-xl font-bold mb-2">Sertu Ladi</h3>
                            <p class="font-medium">Kodiklatad Bandung</p>
                        </div>
                    </div>
                </div>
                <div class="w-full p-4">
                    <div class="bg-[#f85b5b] shadow-nopal rounded-lg overflow-hidden h-full w-[250px] mx-auto md:mx-auto text-white">
                        <div class="w-[85%] h-[288px] mx-auto relative mt-5 rounded-md bg-[#732a2a] overflow-hidden">
                            <img src="{{ asset('img/juri2.png') }}" alt="Team Member" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4 text-center bg-[#732a2a] h-full mt-5">
                            <h3 class="text-xl font-bold mb-2">Aditya Rendy T.</h3>
                            <p class="font-medium">Profesional (Kota Malang)</p>
                        </div>
                    </div>
                </div>
                <div class="w-full p-4">
                    <div
                        class="bg-[#f85b5b] shadow-nopal rounded-lg overflow-hidden h-full w-[250px] mx-auto md:mx-auto lg:mx-0 text-white">
                        <div class="w-[85%] h-[288px] mx-auto relative mt-5 rounded-md bg-[#732a2a] overflow-hidden">
                            <img src="{{ asset('img/juri3.png') }}" alt="Team Member" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4 text-center bg-[#732a2a] h-full mt-5">
                            <h3 class="text-xl font-bold mb-2">Kapten Inf. Didik Wulyanto</h3>
                            <p class="font-medium">Rindam V/Brawijaya</p>
                        </div>
                    </div>
                </div>
                <div class="w-full p-4">
                    <div
                        class="bg-[#f85b5b] shadow-nopal rounded-lg overflow-hidden h-full w-[250px] mx-auto md:mx-auto lg:mx-0 text-white">
                        <div class="w-[85%] h-[288px] mx-auto relative mt-5 rounded-md bg-[#732a2a] overflow-hidden">
                            <img src="{{ asset('img/juri4.png') }}" alt="Team Member" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4 text-center bg-[#732a2a] h-full mt-5">
                            <h3 class="text-xl font-bold mb-2">M. Rizal Adi Saputra S.Pd.</h3>
                            <p class="font-medium">Dancer and Art Design</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-content-between items-center mt-16" id="video">
                <div class="container w-[80%]">
                    <div class="text-gray-800 text-3xl md:text-4xl font-semibold">Trailer Video</div>
                    <div class="text-red-500 text-4xl md:text-5xl font-semibold pt-3">LKBB Antareja</div>
                    <p class="text-gray-700 text-lg md:text-xl font-medium mt-5">Video ini kami persembahkan untuk para calon juara
                        Antareja yang akan memperebutkan 70+ Tropi LKBB tingkat - Jawa Timur</p>
                    <p class="text-gray-700 text-lg md:text-xl font-medium mt-3 mb-10">Dengan hadirnya video ini, kami harap banyak
                        sekolah yang turut berpartisipasi dalam meramaikan LKBB Antareja Tingkat Jawa Timur</p>
                    <a href="#" class="py-4 px-7 bg-red-500 rounded text-white shadow-lg transition ease"><i
                            class="fa-solid fa-play text-lg md:text-xl"></i> Play</a>
                </div>
                <div class="container">
                    <img src="{{ asset('img/orangmockup.png') }}" alt="" class="w-[300px] sm:w-[350px] mx-auto mt-16 md:mt-0">
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-full pb-12 bg-red-500" id="pendaftaran">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-content-between items-center pt-12">
                <div class="container text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl text-white font-bold">Detail Pendaftaran</h1>
                    <p class="text-xl text-gray-200 font-medium mx-auto md:mx-0 w-[70%] pt-10">Kategori LKBB Antareja
                        terbagi menjadi 2 yaitu SMP & SMA se-Jawa Timur</p>
                </div>
                <div class="container mt-8 md:mt-0">
                    <div class="text-white text-center md:text-right font-medium"><i class="fa-solid fa-circle"></i>
                        Kategori SMP / Rp. 350,000</div>
                    <div class="text-white pt-5 text-center md:text-right font-medium"><i class="fa-solid fa-circle"></i>
                        Kategori SMA / Rp. 400,000</div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-full pb-16 bg-transparent" id="">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="grid gap-10 grid-cols-1 md:grid-cols-3 mt-16">
                <div class="bg-[#732a2a] shadow-nopal rounded-xl px-8 py-6 w-[70%] md:w-full mx-auto md:mx-0 text-white border-8 border-[#f85b5b]">
                    <h3 class="text-xl font-bold mb-4 text-center">Direct Messages</h3>
                    <div class="mx-auto">
                        <div class="container">
                            <p class="font-semibold">Paskatema</p>
                            <a href="https://www.instagram.com/paskatema_mlg/" target="_blank" rel="noopener noreferrer">
                                <p class=" mb-2 font-medium underline">@paskatema_mlg</p>
                            </a>
                        </div>
                        <div class="container">
                            <p class="font-semibold">Antareja</p>
                            <a href="https://www.instagram.com/lkbb.antareja/" target="_blank" rel="noopener noreferrer"
                                class="">
                                <p class=" mb-2 font-medium underline">@lkbb.antareja</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-[#732a2a] shadow-nopal rounded-xl px-8 py-6 w-[70%] md:w-full mx-auto md:mx-0 text-white border-8 border-[#f85b5b]">
                    <h3 class="text-xl font-bold mb-4 text-center">Informasi Terkait Perlombaan</h3>
                    <div class="grid md:grid-cols-1 lg:grid-cols-2">
                        <div class="container">
                            <p class=" font-semibold">Dava Pasya</p>
                            <a href="https://wa.me/6281252518787" target="_blank" rel="noopener noreferrer">
                                <p class="mb-2 font-medium underline">+6281252518787</p>
                            </a>
                        </div>
                        <div class="container">
                            <p class=" font-semibold">Zafa Thessa</p>
                            <a href="https://wa.me/6287725666021" target="_blank" rel="noopener noreferrer">
                                <p class="mb-2 font-medium underline">+6287725666021</p>
                        </div></a>
                        <div class="container">
                            <p class=" font-semibold">Satria Adjie</p>
                            <a href="https://wa.me/6282132582733" target="_blank" rel="noopener noreferrer">
                                <p class="mb-2 font-medium underline">+6282132582733</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-[#732a2a] shadow-nopal rounded-xl px-8 py-6 w-[70%] md:w-full mx-auto md:mx-0 text-white border-8 border-[#f85b5b]">
                    <h3 class="text-xl font-bold mb-4 text-center">Konfirmasi Pembayaran</h3>
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="container">
                            <p class=" font-semibold">Yoga</p>
                            <a href="https://wa.me/6281259231428" target="_blank" rel="noopener noreferrer">
                                <p class="mb-2 font-medium underline">+6281259231428</p>
                            </a>
                        </div>
                        <div class="container">
                            <p class=" font-semibold">Avelya</p>
                            <a href="https://wa.me/6282143699893" target="_blank" rel="noopener noreferrer">
                                <p class="mb-2 font-medium underline">+6282143699893</p>
                            </a>
                        </div>
                        <div class="container">
                            <p class=" font-semibold">Fasya</p>
                            <a href="https://wa.me/6281252812720" target="_blank" rel="noopener noreferrer">
                                <p class="mb-2 font-medium underline">+6281252812720</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full h-full pb-16 bg-red-500" id="sponsor">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="flex flex-col justify-content-between pt-10">
                <div class="text-white text-xl md:text-2xl font-semibold text-center sm:text-left">Sponsors and Media Partners</div>
                <div class="text-gray-100 text-3xl md:text-4xl nopal-shadow text-center sm:text-left">Sponsorship</div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                <!-- Media Partner/Sponsor Item -->
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="py-4 px-[75px] sm:py-4 sm:px-0">
                        <img src="{{ asset('img/ggorganizer.png') }}" alt="Media Partner 1"
                            class="w-full h-32 object-contain my-[10%]">
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[58px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-images text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Bisnis anda</h3>
                        <p class="text-center text-lg text-white">Menjadi sponsor kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[58px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-images text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Bisnis anda</h3>
                        <p class="text-center text-lg text-white">Menjadi sponsor kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[58px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-images text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Bisnis anda</h3>
                        <p class="text-center text-lg text-white">Menjadi sponsor kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[58px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-images text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Bisnis anda</h3>
                        <p class="text-center text-lg text-white">Menjadi sponsor kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[58px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-images text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Bisnis anda</h3>
                        <p class="text-center text-lg text-white">Menjadi sponsor kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[58px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-images text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Bisnis anda</h3>
                        <p class="text-center text-lg text-white">Menjadi sponsor kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[58px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-images text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Bisnis anda</h3>
                        <p class="text-center text-lg text-white">Menjadi sponsor kami</p>
                    </div>
                </div>
            </div>
            <div class="text-gray-100 text-3xl md:text-4xl nopal-shadow mt-24 text-center sm:text-left">Media Partner</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="py-4 px-[75px] sm:py-4 sm:px-0">
                        <img src="{{ asset('img/LOGO_FPPM-transparan.png') }}" alt="Media Partner 1"
                            class="w-full h-32 object-contain my-[10%]">
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="py-4 px-[75px] sm:py-4 sm:px-0">
                        <img src="{{ asset('img/LOGO_PKM.png') }}" alt="Media Partner 2"
                            class="w-full h-32 object-contain my-[10%]">
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="py-4 px-[75px] sm:py-4 sm:px-0">
                        <img src="{{ asset('img/NAWAK.png') }}" alt="Media Partner 3"
                            class="w-full h-32 object-contain my-[10%]">
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[35px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-handshake text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Media anda</h3>
                        <p class="text-center text-lg text-white">Menjadi media partner kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[35px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-handshake text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Media anda</h3>
                        <p class="text-center text-lg text-white">Menjadi media partner kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[35px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-handshake text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Media anda</h3>
                        <p class="text-center text-lg text-white">Menjadi media partner kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[35px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-handshake text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Media anda</h3>
                        <p class="text-center text-lg text-white">Menjadi media partner kami</p>
                    </div>
                </div>
                <div class="bg-[#f85b5b] rounded-md mx-auto sm:mx-0 sm:max-w-xs shadow-blue-nopal relative">
                    <div class="w-full absolute top-0 bg-[#732a2a] h-[8px] rounded-t"></div>
                    <div class="p-4 py-4 px-[35px] sm:py-4 sm:px-3 ">
                        <div class="w-full mb-4 text-center text-7xl mt-4">
                            <i class="fa-regular fa-handshake text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-white">Media anda</h3>
                        <p class="text-center text-lg text-white">Menjadi media partner kami</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
