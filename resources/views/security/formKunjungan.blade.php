<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main class="p-4 gap-4 m-3">
                <div class="w-full max-w-screen-xl mx-auto">
                    <div class="flex">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Form Kunjungan</span>
                            
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="/satpam" class="inline-flex items-center text-xs sm:text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="/satpam/daftar-kunjungan" class="inline-flex items-center text-xs sm:text-sm text-[#029C55] underline font-medium whitespace-nowrap hover:text-[#029c5550]">
                                                Daftar Kunjungan
                                            </a>
                                        </div>  
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 md:ms-2 text-xs sm:text-sm text-gray-500 font-medium whitespace-nowrap hover:text-[#029C55]">Form Kunjungan</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>
                
                <!--begin::Form kunjungan-->
                <form class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 mt-6 bg-white rounded-xl shadow-sm">
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full">
                        <!--begin::Nama tamu-->
                        <div class="mb-5 w-full">
                            <label for="namaTamu" class="block mb-2 text-sm text-gray-900 font-medium">Nama Tamu <span class="text-xs text-[#e21b1b]">*</span></label>
                            <input type="text" id="namaTamu" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Masukkan nama lengkap tamu" required />
                        </div>
                        <!--end::Nama tamu-->
                        
                        <!--begin::Foto identitas dan instansi-->
                        <div class="flex flex-col md:flex-row gap-4">
                            <!--begin::Foto identitas-->
                            <div class="mb-5 w-full">
                                <label class="block mb-2 text-sm text-gray-900 font-medium">Foto Identitas <span class="text-xs text-[#e21b1b]">*</span></label>
                                <label for="fotoIdentitas" class="flex gap-2 p-2.5 items-center bg-[#029C55] rounded-lg text-sm text-white cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>
                                    <span>Upload Foto</span>
                                </label>
                                <input type="file" id="fotoIdentitas" class="hidden" required />
                            </div>
                            <!--end::Foto identitas-->
                            
                            <!--begin::Instansi-->
                            <div class="mb-5 w-full">
                                <label for="instansi" class="block mb-2 text-sm text-gray-900 font-medium">Instansi <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" id="instansi" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Nama instansi asal" required />
                            </div>
                            <!--end::Instansi-->
                        </div>
                        <!--end::Foto identitas dan instansi-->
                        
                        <!--begin::Tanggal dan waktu kunjungan-->
                        <div class="flex flex-col md:flex-row gap-4">
                            <!--begin::Tanggal kunjungan-->
                            <div class="mb-5 w-full">
                                <label for="tanggalKunjungan" class="block mb-2 text-sm text-gray-900 font-medium">Tanggal Kunjungan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-buttons datepicker-autoselect-today id="datepicker-actions" type="text" class="block w-full ps-10 p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                            <!--end::Tanggal kunjungan-->
                            
                            <!--begin::Waktu kedatangan-->
                            <div class="mb-5 w-full">
                                <label for="waktuKedatangan" class="block mb-2 text-sm text-gray-900 font-medium">Waktu Kedatangan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input type="time" id="time" class="block w-full ps-10 p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-500" min="09:00" max="18:00" value="00:00" required />
                                </div>
                            </div>
                            <!--end::Waktu kedatangan-->
                        </div>
                        <!--end::Tanggal dan waktu kunjungan-->
                        
                        <!--begin::Keperluan-->
                        <div class="mb-5">
                            <label for="large-input" class="block mb-2 text-sm text-gray-900 font-medium">Keperluan <span class="text-xs text-[#e21b1b]">*</span></label>
                            <textarea type="text" id="large-input" class="block w-full h-full p-2 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Tuliskan keperluan tamu" required></textarea>
                        </div>
                        <!--end::Keperluan-->
                    </div>
                    <!--end::Form kiri-->
                            
                    <!--begin::Form kanan-->
                    <div class="flex flex-col h-full">
                        
                        <!--begin::Pihak dan divisi tujuan-->
                        <div class="flex flex-col md:flex-row gap-4">
                            
                            <!--begin::Pihak tujuan-->
                            <div class="mb-5 w-full">
                                <label for="pihakTujuan" class="block mb-2 text-sm text-gray-900 font-medium">Pihak Tujuan <span class="text-xs text-[#e21b1b]">*</span></label>                              
                                    <!--begin::Dropdown-->
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownTujuan" class="flex w-full p-2.5 justify-between items-center border border-gray-300 rounded-lg text-sm text-gray-900" type="button">
                                        Pilih pihak tujuan    
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                        <!--begin::Dropdown menu -->
                                        <div id="dropdownTujuan" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                            <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih pihak tujuan</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end::Dropdown menu-->                                
                                    <!--end::Dropdown-->
                            </div>
                            <!--end::Pihak tujuan-->
                            
                            <!--begin::Divisi pihak tujuan-->
                            <div class="mb-5 w-full">
                                <label for="divisiTujuan" class="block mb-2 text-sm text-gray-900 font-medium">Divisi <span class="text-xs text-[#e21b1b]">*</span></label>
                                    <!--begin::Dropdown-->
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownDivisi" class="flex w-full p-2.5 justify-between items-center border border-gray-300 rounded-lg text-sm text-gray-900" type="button">
                                        Pilih divisi    
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                        <!--begin::Dropdown menu -->
                                        <div id="dropdownDivisi" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                            <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih divisi</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end::Dropdown menu-->   
                                    <!--end::Dropdown-->    
                            </div>
                            <!--end::Divisi pihak tujuan-->
                        </div>
                        <!--end::Pihak dan divisi tujuan-->
                        
                        <!--begin::Status-->
                        <div class="mb-5 w-full">
                            <label for="status" class="block mb-2 text-sm text-gray-900 font-medium">Status <span class="text-xs text-[#e21b1b]">*</span></label>
                                <!--begin::Dropdown-->
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownStatus" class="flex w-full p-2.5 justify-between items-center border border-gray-300 rounded-lg text-sm text-gray-900" type="button">
                                    Pilih status   
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                    
                                    <!--begin::Dropdown menu -->
                                    <div id="dropdownStatus" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                            <li>
                                                <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih pihak tujuan</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Dropdown menu-->       
                                <!--end::Dropdown-->
                        </div>
                        <!--end::Status-->
                        
                        <!--begin::Nama satpam dan resepsionis-->
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="mb-5 w-full">
                                <label for="satpam" class="block mb-2 text-sm text-gray-900 font-medium">Satpam <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" id="satpam" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Nama satpam sesuai yang mendaftarkan" required />
                            </div>
                            <div class="mb-5 w-full">
                                <label for="resepsionis" class="block mb-2 text-sm text-gray-900 font-medium">Resepsionis <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" id="resepsionis" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Masukkan nama resepsionis" required />
                            </div>
                        </div>
                        <!--end::Nama satpam dan resepsionis-->
                        
                        <!--begin::Unggah TTD dan waktu kepulangan-->
                        <div class="flex flex-col md:flex-row gap-4">
                            <!--begin::Unggah TTD-->
                            <div class="mb-5 w-full">
                                <label class="block mb-2 text-sm text-gray-900 font-medium">Unggah Tandatangan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <label for="fotoTTD" class="flex gap-2 p-2.5 items-center bg-[#029C55] rounded-lg text-sm text-white cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>
                                    <span>Upload TTD</span>
                                </label>
                                <input type="file" id="fotoTTD" class="hidden" required />
                            </div>
                            <!--end::Unggah TTD-->
                            
                            <!--begin::Waktu kepulangan-->
                            <div class="mb-5 w-full">
                                <label for="waktuKepulangan" class="block mb-2 text-sm text-gray-900 font-medium">Waktu Kepulangan <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input type="time" id="time" class="block w-full ps-10 p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-500" min="09:00" max="18:00" value="00:00" required />
                                </div>
                            </div>
                            <!--end::Waktu kepulangan-->
                        </div>
                        <!--end::Unggah TTD dan waktu kepulangan-->
                        
                        <div class="flex w-full justify-end items-end gap-2 text-sm">
                            <button type="submit" class="p-2.5 px-7 justify-center items-center bg-[#029C55] rounded-lg text-white">Simpan</button>
                            <button class="p-2.5 px-7 justify-center items-center bg-gray-50 border border-gray-300 rounded-lg">Batal</button>
                        </div>
                    </div>          
                    <!--end::Form kanan-->
                </form>
                <!--end::Form kunjungan-->
            </main>
        </div>
    </div>
</body>
</html>