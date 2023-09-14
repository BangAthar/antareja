<!DOCTYPE html>
<html>

<head>
    <meta name="description"
        content="Antareja merupakan website informasi mengenai lomba keterampilan baris berbaris yang diadakan SMK Telkom Sandhy Putra Malang tahun 2023 pada bulan september">
    <link rel="canonical" href="https://antareja.smktelkom-mlg.sch.id" />
    <meta property="og:site_name" content="Antareja">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://antareja.smktelkom-mlg.sch.id">
    <meta property="og:title" content="Antareja - Information about LKBB Antareja">
    <meta property="og:description"
        content="Antareja merupakan website informasi mengenai lomba keterampilan baris berbaris yang diadakan SMK Telkom Sandhy Putra Malang tahun 2023 pada bulan september">
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="icon" href="{{ asset('img/antareja-logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/antareja-logo.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Antareja - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body class="text-blueGray-700 antialiased">
    <div id="popup"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-opacity-50 bg-gray-900 hidden z-50">
        <div class="bg-white p-8 rounded-lg max-w-md">
            <h2 class="text-2xl font-bold mb-4">Antareja's Developer</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Front-end Developer -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-bold mb-2">Front-end Developer</h3>
                    <p class="text-gray-700">Nama: Muhammad Naufal Mathara R</p>
                    <p class="text-gray-700">Ig: @aathrr._</p>
                </div>

                <!-- Back-end Developer -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-bold mb-2">Back-end Developer</h3>
                    <p class="text-gray-700">Nama: Tegar Dito Priandika</p>
                    <p class="text-gray-700">Ig: @tega_r.dp</p>
                </div>

                <!-- UI/UX Developer -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-bold mb-2">UI/UX Designer</h3>
                    <p class="text-gray-700">Nama: Praditya Haekal Islami A</p>
                    <p class="text-gray-700">Ig: @haeekal_</p>
                </div>
            </div>

            <button id="closePopup" class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tutup
            </button>
        </div>
    </div>

    <div id="root">
        {{-- INI NAVBAR --}}
        <nav
            class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
            <div
                class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    type="button" onclick="toggleNavbar('example-collapse-sidebar')"> <i class="fas fa-bars"></i>
                </button>

                <a class="md:block text-left md:pb-2 text-red-500 mr-0 inline-block whitespace-nowrap text-sm uppercase font-mortend font-bold p-4 px-0"
                    href="/"> Antareja</a>
                <ul class="md:hidden items-center flex flex-wrap list-none">
                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block" href="#main"
                            onclick="openDropdown(event,'user-responsive-dropdown')">
                            <div class="items-center flex">
                                <div class="bg-red-500 text-white h-10 w-10 flex items-center justify-center rounded-full font-semibold text-xl">{{ substr(auth()->user()->name, 0, 1) }}</div>
                            </div>
                        </a>
                        <div
                            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"id="user-responsive-dropdown">
                            <div
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                {{ auth()->user()->name }}</div>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <form action="{{ route('LogoutAccount') }}" method="post">
                                @csrf
                                <button href="#"
                                    class="text-left text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-red-400">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                    id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-red-500 mr-0 inline-block whitespace-nowrap text-sm uppercase font-mortend font-bold p-4 px-0"
                                    href="/">
                                    ANTAREJA
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button"
                                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                    onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Heading -->
                    <h6
                        class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        User Layout Pages
                    </h6>
                    <!-- Navigation -->

                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center">
                            <a href="/dashboard"
                                class="{{ Request::is('dashboard') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }} text-xs uppercase py-3 font-bold block">
                                <i
                                    class="fas fa-tv mr-2 text-sm opacity-75 {{ Request::is('dashboard') ? '' : 'text-blueGray-300' }}"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/dashboard/team-setting"
                                class="text-xs uppercase py-3 font-bold block {{ Request::is('dashboard/team-setting') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }}">
                                <i
                                    class="fas fa-tools mr-2 text-sm {{ Request::is('dashboard/team-setting') ? '' : 'text-blueGray-300' }}"></i>
                                Team Setting
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/dashboard/member-setting"
                                class="text-xs uppercase py-3 font-bold block {{ Request::is('dashboard/member-setting') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }}">
                                <i
                                    class="fas fa-tools mr-2 text-sm {{ Request::is('dashboard/member-setting') ? '' : 'text-blueGray-300' }}"></i>
                                Member Setting
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/dashboard/informasi"
                                class="text-xs uppercase py-3 font-bold block {{ Request::is('dashboard/informasi') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }}">
                                <i
                                    class="fa-solid fa-bullhorn mr-2 text-sm {{ Request::is('dashboard/informasi') ? '' : 'text-blueGray-300' }}"></i>
                                Informasi
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/dashboard/buku-panduan"
                                class="text-xs uppercase py-3 font-bold block {{ Request::is('dashboard/buku-panduan') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }}">
                                <i
                                    class="fa-solid fa-book mr-2 text-sm {{ Request::is('dashboard/buku-panduan') ? '' : 'text-blueGray-300' }}"></i>
                                Buku Panduan
                            </a>
                        </li>
                        {{-- <li class="items-center">
                            <a href="/dashboard/galeri-media"
                                class="text-xs uppercase py-3 font-bold block {{ Request::is('dashboard/galeri-media') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }}">
                                <i
                                    class="fa-solid fa-photo-film mr-2 text-sm {{ Request::is('dashboard/galeri-media') ? '' : 'text-blueGray-300' }}"></i>
                                Galeri Media
                            </a>
                        </li> --}}

                        <li class="items-center">
                            <a href="/dashboard/rekapan-nilai"
                                class="text-xs uppercase py-3 font-bold block {{ Request::is('dashboard/rekapan-nilai') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }}">
                                <i class="fa-solid fa-marker mr-2 text-sm {{ Request::is('dashboard/rekapan-nilai') ? '' : 'text-blueGray-300' }}"></i>
                                Rekapan Nilai
                            </a>
                        </li>
                    </ul>
                    <hr class="my-4 md:min-w-full" />

                    @if (auth()->check() &&
                            auth()->user()->isAdmin())
                        <h6
                            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                            Admin Layout Pages
                        </h6>

                        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                            <li class="items-center">
                                <a href="/dashboard/create-informasi"
                                    class="{{ Request::is('dashboard/create-informasi') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }} text-xs uppercase py-3 font-bold block">
                                    <i
                                        class="fa-solid fa-lock mr-2 text-sm opacity-75 {{ Request::is('dashboard/create-informasi') ? '' : 'text-blueGray-300' }}"></i>
                                    Tambahkan Informasi
                                </a>
                            </li>
                        </ul>

                        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                            <li class="items-center">
                                <a href="/dashboard/rekapnilai-setting"
                                    class="{{ Request::is('dashboard/rekapnilai-setting') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }} text-xs uppercase py-3 font-bold block">
                                    <i
                                        class="fa-solid fa-lock mr-2 text-sm opacity-75 {{ Request::is('dashboard/rekapnilai-setting') ? '' : 'text-blueGray-300' }}"></i>
                                    Mengatur Rekap Nilai
                                </a>
                            </li>
                        </ul>

                        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                            <li class="items-center">
                                <a href="/dashboard/data-peserta"
                                    class="{{ Request::is('dashboard/data-peserta') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }} text-xs uppercase py-3 font-bold block">
                                    <i
                                        class="fa-solid fa-lock mr-2 text-sm opacity-75 {{ Request::is('dashboard/data-peserta') ? '' : 'text-blueGray-300' }}"></i>
                                    DATA PESERTA
                                </a>
                            </li>
                        </ul>

                        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                            <li class="items-center">
                                <a href="/dashboard/data-team"
                                    class="{{ Request::is('dashboard/data-team') ? 'text-red-500 hover:text-red-700' : 'text-blueGray-700 hover:text-blueGray-500' }} text-xs uppercase py-3 font-bold block">
                                    <i
                                        class="fa-solid fa-lock mr-2 text-sm opacity-75 {{ Request::is('dashboard/data-team') ? '' : 'text-blueGray-300' }}"></i>
                                    DATA TEAM
                                </a>
                            </li>
                        </ul>

                        <!-- Divider -->
                        <hr class="my-4 md:min-w-full" />
                    @endif
                </div>
            </div>
        </nav>
        <div class="relative md:ml-64 bg-blueGray-50">
            <nav
                class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
                        href="/dashboard">Dashboard</a>
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-blueGray-500 block" href="#main"
                            onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <div class="bg-white text-red-500 h-10 w-10 flex items-center justify-center rounded-full font-semibold text-xl">{{ substr(auth()->user()->name, 0, 1) }}</div>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="user-dropdown">
                            <div
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                {{ auth()->user()->name }}</div>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <form action="{{ route('LogoutAccount') }}" method="post">
                                @csrf
                                <button href="#"
                                    class="text-left text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-red-400">Logout</button>
                            </form>
                        </div>
                    </ul>
                </div>
            </nav>
            <!-- Header -->

            @yield('container')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
