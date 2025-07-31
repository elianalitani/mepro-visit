<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main class="p-4 gap-4 m-3">
                <div class="w-full max-w-screen-xl mx-auto">
                    <div class="flex flex-">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Form Kunjungan</span>
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="/admin" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="/daftar-kunjungan" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                                Daftar Kunjungan
                                            </a>
                                        </div>  
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400 hover:text-[#029C55]">Form Kunjungan</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>
                
                <!--begin::Form kunjungan-->
                <form class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-xl gap-4 mt-6 shadow-sm p-4">
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full">
                        <div class="mb-5 w-full">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Tamu <span class="text-xs text-[#e21b1b]">*</span></label>
                            <input type="text" id="namaTamu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukkan nama lengkap tamu" required />
                        </div>
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="mb-5 w-full">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Foto Identitas <span class="text-xs text-[#e21b1b]">*</span></label>
                                <label for="fotoIdentitas" class="flex bg-[#029C55] rounded-lg items-center text-white text-sm p-2.5 gap-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>
                                    <span>Upload Foto</span>
                                </label>
                                <input type="file" id="fotoIdentitas" class="hidden" required />
                            </div>
                            <div class="mb-5 w-full">
                                <label for="instansi" class="block mb-2 text-sm font-medium text-gray-900">Instansi <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" id="instansi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nama instansi asal" required />
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="mb-5 w-full">
                                <!--begin::Kalender tanggal kunjungan-->
                                <label for="tanggalKunjungan" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Kunjungan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-buttons datepicker-autoselect-today id="datepicker-actions" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5" placeholder="DD/MM/YYYY">
                                </div>
                                <!--end::Kalender tanggal kunjungan-->
                            </div>
                            <div class="mb-5 w-full">
                                <label for="waktuKedatangan" class="block mb-2 text-sm font-medium text-gray-900">Waktu Kedatangan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input type="time" id="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5" min="09:00" max="18:00" value="00:00" required />
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900">Keperluan <span class="text-xs text-[#e21b1b]">*</span></label>
                            <textarea type="text" id="large-input" class="block w-full h-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm" placeholder="Tuliskan keperluan tamu" required></textarea>
                        </div>
                    </div>
                    <!--end::Form kiri-->
                            
                    <!--begin::Form kanan-->
                    <div class="flex flex-col h-full">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="mb-5 w-full">
                                <label for="pihakTujuan" class="block mb-2 text-sm font-medium text-gray-900">Pihak Tujuan <span class="text-xs text-[#e21b1b]">*</span></label>                              
                                    <!--begin::Dropdown-->
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownTujuan" class="border border-gray-300 text-gray-900 text-sm rounded-lg flex justify-between items-center w-full p-2.5" type="button">
                                        Pilih pihak tujuan    
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <!--end::Dropdown-->

                                    <!--begin::Dropdown menu -->
                                    <div id="dropdownTujuan" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                            <li>
                                                <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih pihak tujuan</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Dropdown menu-->                                
                            </div>
                            <div class="mb-5 w-full">
                                <label for="pihakTujuan" class="block mb-2 text-sm font-medium text-gray-900">Divisi<span class="text-xs text-[#e21b1b]">*</span></label>
                                    <!--begin::Dropdown-->
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownDivisi" class="border border-gray-300 text-gray-900 text-sm rounded-lg flex justify-between items-center w-full p-2.5" type="button">
                                        Pilih divisi    
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <!--end::Dropdown-->

                                    <!--begin::Dropdown menu -->
                                    <div id="dropdownDivisi" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                            <li>
                                                <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih divisi</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Dropdown menu-->       
                            </div>
                        </div>
                        <div class="mb-5 w-full">
                            <label for="pihakTujuan" class="block mb-2 text-sm font-medium text-gray-900">Status<span class="text-xs text-[#e21b1b]">*</span></label>
                                    <!--begin::Dropdown-->
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownStatus" class="border border-gray-300 text-gray-900 text-sm rounded-lg flex justify-between items-center w-full p-2.5" type="button">
                                        Pilih status   
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <!--end::Dropdown-->

                                    <!--begin::Dropdown menu -->
                                    <div id="dropdownStatus" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                            <li>
                                                <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih pihak tujuan</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Dropdown menu-->       
                        </div>
                        <div class="flex justify-between gap-2">
                            <div class="mb-5 w-full">
                                <label for="satpam" class="block mb-2 text-sm font-medium text-gray-900">Satpam <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" id="satpam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Nama satpam sesuai yang mendaftarkan" required />
                            </div>
                            <div class="mb-5 w-full">
                                <label for="resepsionis" class="block mb-2 text-sm font-medium text-gray-900">Resepsionis <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" id="resepsionis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Masukkan nama resepsionis" required />
                            </div>
                        </div>
                        <div class="flex justify-between gap-2">
                            <div class="mb-5 w-full">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Unggah Tandatangan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <label for="fotoTTD" class="flex bg-[#029C55] rounded-lg items-center text-white text-sm p-2.5 gap-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>
                                    <span>Upload TTD</span>
                                </label>
                                <input type="file" id="fotoTTD" class="hidden" required />
                            </div>
                            <div class="mb-5 w-full">
                                <label for="waktuKepulangan" class="block mb-2 text-sm font-medium text-gray-900">Waktu Kedatangan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input type="time" id="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5" min="09:00" max="18:00" value="00:00" required />
                                </div>
                            </div>
                        </div>
                        <div class="flex text-sm w-full justify-end items-end gap-2">
                            <button type="submit" class="p-2.5 px-7 rounded-lg bg-[#029C55] justify-center items-center text-white">Simpan</button>
                            <button class="p-2.5 px-7 rounded-lg bg-gray-50 border border-gray-300 justify-center items-center">Batal</button>
                        </div>
                    </div>          
                    <!--end::Form kanan-->
                </form>
                <!--end::Form kunjungan-->
            </main>
        </div>
    </div>

<script>
</script>

</body>
</html>