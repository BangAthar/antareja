<!DOCTYPE html>
<html lang="en" class="bg-antareja bg-cover bg-center scroll-smooth scroll-p-16">

<head>
    <meta name="description"
        content="Antareja merupakan website informasi mengenai lomba keterampilan baris berbaris yang diadakan SMK Telkom Sandhy Putra Malang tahun 2023 pada bulan september">
    <link rel="canonical" href="https://antareja.smktelkom-mlg.sch.id" />
    <meta property="og:site_name" content="Antareja">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://antareja.smktelkom-mlg.sch.id">
    <meta property="og:title" content="Vexento Universe NFT">
    <meta property="og:description"
        content="Vexento Universe Official Website - Have a collection of 3D robots from the vexento universe which is only available 666 items and each item is handcrafted by the hands of a young man who loved robots in his childhood">
    <meta property="og:image" content="{{ asset('img/antareja-logo.png') }}">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Antareja" />
    <meta name="twitter:title" content="Antareja" />
    <meta name="twitter:description"
        content="Antareja merupakan website informasi mengenai lomba keterampilan baris berbaris yang diadakan SMK Telkom Sandhy Putra Malang tahun 2023 pada bulan september" />
    <meta name="twitter:creator" content="@Antareja" />
    <meta name="author" content="Noxvall and Tegar">
    <meta name="keywords"
        content="antareja, web, website,lomba, competition, smktelkom, smktelkommalang, malang, lkbb, paskibraka">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Antareja - Selamat Datang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="icon" href="{{ asset('img/antareja-logo.png') }}">
</head>

<body>
    <div id="popup" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-opacity-50 bg-gray-900 hidden z-50">
        <div class="bg-white p-8 rounded-lg max-w-md">
            <h2 class="text-2xl font-bold mb-4">Antareja's Developer</h2>

            <div class="flex flex-col w-full gap-4">
                <p>
                    Jika terdapat kendala akun anda segera hubungi admin website dengan berikan informasi dan alasan yang detail agar bisa kami bantu tangani.
                </p>
                <p>
                    Kontak : <a target="_blank" href="https://api.whatsapp.com/send?phone=6289621416460&text=Hello%20Antareja%27s%20Admin%2C%20saya%20memiliki%20problem%20dengan%20akun%20saya%20di%20website%0A%0ANama%20%3A%20%0AEmail%20%3A%0ATeam%20%3A%0AAlasan%20bantuan%20%3A%0A%0ATerima%20kasih" class="underline text-blue-500">Admin</a>
                </p>
            </div>

            <button id="closePopup" class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tutup
            </button>
        </div>
    </div>
    <nav class="sticky top-0 z-50 bg-white shadow-xl transition ease">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
            <div class="flex items-center justify-between h-16">
                <a href="/">
                    <div class="flex items-center">
                        <img src="{{ asset('img/antareja-logo.png') }}" alt="antareja logo" class="w-11">
                        <div class="font-bold ml-5 mt-2 text-xl font-mortend text-[#E4262B]">ANTAREJA</div>
                    </div>
                </a>
                <div class="block md:hidden">
                    <button class="mobile-menu-button">
                        <i class="fa-solid fa-bars text-lg"></i>
                    </button>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/#beranda"
                            class="text-black-50 hover:text-gray-500 px-3 py-2 rounded-md text-md font-medium">Beranda</a>
                        <a href="/#antareja"
                            class="text-black-50 hover:text-gray-500 px-3 py-2 rounded-md text-md font-medium">Antareja</a>
                        <a href="/#video"
                            class="text-black-50 hover:text-gray-500 px-3 py-2 rounded-md text-md font-medium">Video</a>
                        <a href="/#pendaftaran"
                            class="text-black-50 hover:text-gray-500 px-3 py-2 rounded-md text-md font-medium">Pendaftaran</a>
                        @auth
                            <div class="relative">
                                <button class="flex items-center px-3 py-2 text-black-50 hover:text-gray-500"
                                    id="userDropdown">
                                    <span class="mr-2"><i class="fa-solid fa-user"></i> {{ auth()->user()->name }}</span>
                                    <i class="fa-solid fa-arrow-down"></i>
                                </button>

                                <div class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-lg hidden"
                                    id="userDropdownMenu">
                                    <a href="/dashboard"
                                        class="block px-3 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                                    <hr>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button href="#"
                                            class="text-left block w-full px-3 py-2 text-red-600 hover:bg-gray-100">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a href="/login"
                                class="text-black-50 hover:text-gray-500 px-3 py-2 rounded-md text-md font-medium"><i
                                    class="fa-solid fa-user"></i> login</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/#beranda"
                    class="text-black-50 hover:text-gray-500 block px-3 py-2 rounded-md text-base font-medium">Beranda</a>
                <a href="/#antareja"
                    class="text-black-50 hover:text-gray-500 block px-3 py-2 rounded-md text-base font-medium">Antareja</a>
                <a href="/#video"
                    class="text-black-50 hover:text-gray-500 block px-3 py-2 rounded-md text-base font-medium">Video</a>
                <a href="/#pendaftaran"
                    class="text-black-50 hover:text-gray-500 block px-3 py-2 rounded-md text-base font-medium">Pendaftaran</a>
                @auth
                    <div class="relative">
                        <button class="flex items-center px-3 py-2 text-black-50 hover:text-gray-500" id="userDropdown2">
                            <span class="mr-2"><i class="fa-solid fa-user"></i> {{ auth()->user()->name }}</span>
                            <i class="fa-solid fa-arrow-down"></i>
                        </button>

                        <div class="absolute left-0 mt-2 py-2 w-48 bg-white rounded-md shadow-lg hidden"
                            id="userDropdownMenu2">
                            <a href="/dashboard" class="block px-3 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                            <hr>
                            <form action="/logout" method="post">
                                @csrf
                                <button href="#"
                                    class="text-left block w-full px-3 py-2 text-red-600 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/login"
                        class="text-black-50 hover:text-gray-500 px-3 py-2 rounded-md text-md font-medium"><i
                            class="fa-solid fa-user"></i> login</a>
                @endauth
            </div>
        </div>
    </nav>
    @yield('container')
    <section class="w-full h-[980px] sm:h-[700px] md:h-[750px] lg:h-[300px] bg-[#0e0e0e]">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 pt-10">
                <div class="mx-auto lg:mx-0 text-center lg:text-left w-[90%]">
                    <div class="flex flex-row items-center">
                        <img src="{{ asset('img/antarejalogo2.png') }}" alt="antarejalogo" class="w-[25%]">
                        <div class="font-mortend text-red-500 text-xl pl-0 lg:pl-8">ANTAREJA</div>
                    </div>
                    <p class="font-medium py-5 text-gray-300">Web ini adalah web resmi terkait informasi LKBB Antareja
                        tingkat Jawa Timur yang diselenggarakan SMK TELKOM MALANG</p>
                    <div class="block lg:flex lg:flex-row gap-5 text-white mt-2 lg:mt-0">
                        <a href="https://www.instagram.com/lkbb.antareja/" target="_blank"
                            rel="noopener noreferrer"><i class="fa-brands fa-instagram text-xl"></i></a>
                        <a href="https://www.youtube.com/@smktsmalang" target="_blank" rel="noopener noreferrer"><i
                                class="fa-brands fa-youtube text-xl ml-3 lg:ml-0"></i></a>
                        <a href="https://www.tiktok.com/@lkbb.antareja" target="_blank" rel="noopener noreferrer"><i
                                class="fa-brands fa-tiktok ml-3 mt-2 lg:ml-0"></i></a>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 mx-auto text-gray-300 text-center mt-8">
                    <div class="container text-center flex flex-col">
                        <h1 class="font-bold text-xl w-[130px] mb-0 sm:mb-3 text-white">Contact Us</h1>
                        <a href="https://wa.me/6281259231428" class="font-medium text-lg mt-2 underline">Whatsap</a>
                        <a href="https://wa.me/6281259231428" class="font-medium text-lg mt-2 underline">Telephone</a>
                        <a href="mailto:antareja@smktelkom-mlg.sch.id" class="font-medium text-lg mt-2 underline">Email</a>
                    </div>
                    <div class="container text-center flex flex-col">
                        <h1 class="font-bold text-xl w-[130px] mb-0 sm:mb-3 text-white">Support</h1>
                        <a href="https://wa.me/6281259231428" class="font-medium text-lg mt-2 underline">Sponsor</a>
                        <a href="mailto:antareja@smktelkom-mlg.sch.id" class="font-medium text-lg mt-2 underline">Feedback</a>
                        <a href="/login" class="font-medium text-lg mt-2 underline">Account</a>
                    </div>
                    <div class="container text-center flex flex-col">
                        <h1 class="font-bold text-xl w-[130px] mb-0 sm:mb-3 text-white">Others</h1>
                        <a href="/#beranda" class="font-medium text-lg mt-2 underline">Home</a>
                        <a href="/#antareja" class="font-medium text-lg mt-2 underline">Antareja</a>
                        <a href="/#pendaftaran" class="font-medium text-lg mt-2 underline">Pendaftaran</a>
                    </div>
                </div>
                <div class="text-center lg:text-left ml-0 lg:ml-24 mt-8">
                    <h1 class="text-white font-bold text-xl mb-5">Join With Us</h1>
                    <p class="font-medium text-lg text-gray-300 mb-5">Gabung bersama kami dan buktikan tim-mu yang
                        terbaik</p>
                    <a href="https://forms.gle/9qSU9jSyiEVAAs5K6"
                        class="text-white font-medium py-3 px-5 bg-[#FF5733] rounded font-medium">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('js/script.js') }}"></script>

</html>
