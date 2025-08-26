<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
    @include('components.modal')
    <!--begin::Loading-->
    <div id="loadingOverlay" class="hidden fixed inset-0 flex z-99 w-screen justify-center items-center">
        @include('components.loading')
    </div>
    <!--end::Loading-->

    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main id="main" class="p-4 gap-4 m-3 transition-all duration-300">
                <div class="w-full max-w-screen-xl mx-auto">
                    <div class="flex flex-wrap justify-between">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Daftar Akun</span>
                            
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 md:ms-2 text-sm text-gray-500 font-medium hover:text-[#029C55]">Daftar Akun</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                        
                        <!--begin::Options-->
                        <div class="flex flex-wrap justify-center items-center gap-3">
                            <!--begin::Entry dropdown -->
                            <div class="flex items-center gap-2 text-sm">
                                <span>Showing</span>

                                <button id="dropdownEntriesButton" data-dropdown-toggle="dropdownEntriesMenu" class="flex bg-[#029C5560] rounded-sm px-2 py-1 justify-center items-center shadow-sm" type="button">
                                    <span id="selectedEntries">10</span>
                                    <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>

                                <div id="dropdownEntriesMenu" class="z-10 hidden divide-y divide-gray-100 bg-white rounded-lg shadow-sm cursor-pointer hidden">
                                    <ul class="py-2 text-sm" aria-labelledby="dropdownEntriesButton">
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="5">5</a></li>
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="10">10</a></li>
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="25">25</a></li>
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="50">50</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end::Entry dropdown-->

                            <!--begin::Export button-->
                            <div class="flex px-2 py-1 bg-white rounded-sm gap-2 items-center justify-center font-bold shadow-sm cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Unggah
                            </div>
                            <!--end::Export button-->
                            
                            <!--begin::Tambah akun baru-->
                            <a href="{{ route('akun.tambahAkun') }}" class="flex gap-2 px-2 py-1 justify-center items-center bg-[#029C55] rounded-sm text-white font-bold shadow-sm cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                Tambah Akun Baru
                            </a>
                            <!--end::Tambah akun baru-->
                        </div>
                        <!--end::Options-->
                    </div>
                    
                    @include('components.accountTableList')
                    
                </div>
            </main>
        </div>
    </div>
    
@vite(['resources/js/modal.js', 'resources/js/daftarAkun.js'])

</body>
</html>