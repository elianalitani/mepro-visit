<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
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
                    <div class="flex flex-">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Registrasi Akun</span>
                            
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="{{ route('akun.index') }}" class="inline-flex items-center text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
                                                Daftar Akun
                                            </a>
                                        </div>  
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 md:ms-2 text-sm text-gray-500 font-medium hover:text-[#029C55]">Registrasi Akun</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>           
                    <!--begin::Form akun-->
                    <form id="formAkunBaru" action="{{ route('akun.simpanAkun') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2">
                        @csrf
                        <!--begin::Form kiri-->
                        <div class="flex flex-col h-full gap-4 p-4 mt-6 bg-white rounded-xl shadow-sm">
                            
                            <!--begin::Nama karyawan-->
                            <div class="mb-5 w-full">
                                <label for="namaKaryawan" class="block mb-2 text-sm text-gray-900 font-medium">
                                    Nama Karyawan <span class="text-xs text-[#e21b1b]">*</span></label>                              
                                <!--begin::Dropdown-->
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownNamaK" class="flex w-full p-2.5 justify-between items-center border border-gray-300 rounded-lg text-sm text-gray-900" type="button">
                                    Pilih nama karyawan    
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>

                                    <!--begin::Dropdown menu -->
                                    <div id="dropdownNamaK" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                            <li>
                                                <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih nama karyawan</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Dropdown menu-->  
                                <!--end::Dropdown-->                              
                        </div>
                        <!--end::Nama karyawan-->
                        
                        <!--begin::Divisi karyawan-->
                        <div class="mb-5 w-full">
                            <label for="divisiKaryawan" class="block mb-2 text-sm text-gray-900 font-medium">Divisi <span class="text-xs text-[#e21b1b]">*</span></label>
                            <!--begin::Dropdown-->
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownDivisiK" class="flex w-full p-2.5 justify-between items-center border border-gray-300 rounded-lg text-sm text-gray-900" type="button">
                                    Pilih divisi    
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                            
                                <!--begin::Dropdown menu -->
                                <div id="dropdownDivisiK" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                    <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a class="block px-4 py-2 hover:bg-[#eefbe8]">Pilih divisi</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Dropdown menu-->
                                <!-- Hidden input agar value ikut ke form -->
                                <input type="hidden" name="role" id="roleInput" required>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Role-->

                            <!--begin::Username-->
                            <div class="mb-5 w-full">
                                <label for="username" class="block mb-2 text-sm text-gray-900 font-medium">Username <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" name="username" id="username" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Masukkan username" required />
                            </div>
                            <!--end::Username-->
                            
                            <!--begin::Password-->
                            <div class="mb-5 w-full">
                                <label for="password" class="block mb-2 text-sm text-gray-900 font-medium">Password <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative">
                                    <input id="password hs-toggle-password" name="password" type="password" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Password minimal 8 karakter"">
                                    <button type="button" data-hs-toggle-password='{
                                        "target": "#hs-toggle-password"
                                    }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                        <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!--end::Password-->
                            
                            <!--begin::Konfirmasi password-->
                            <div class="mb-5 w-full">
                                <label for="confirmPassword" class="block mb-2 text-sm text-gray-900 font-medium">Konfirmasi Password <span class="text-xs text-[#e21b1b]">*</span></label>
                                <div class="relative">
                                    <input id="confirmPassword hs-toggle-password" type="password" name="password_confirmation"  class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Password minimal 8 karakter"">
                                    <button type="button" data-hs-toggle-password='{
                                        "target": "#hs-toggle-password"
                                    }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                        <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!--end::Konfirmasi password-->
                            
                            <div class="flex text-sm w-full justify-end items-end gap-2">
                                <button type="button" id="btnBuatAkun" class="p-2.5 px-7 rounded-lg bg-[#029C55] justify-center items-center text-white">Simpan</button>
                                <a href="{{ route('akun.index') }}" class="p-2.5 px-7 rounded-lg bg-gray-50 border border-gray-300">Batal</a>
                            </div>
                           
                        </div>
                    </form> 
                    <!--end::Form kiri-->                          
                    <!--begin::Form kanan-->
                    <div class="flex flex-col h-full gap-4 p-4 mt-6 justify-center items-center">
                        <img src="\assets\images\replace-later.svg" class="w-auto h-64">
                        <span class="text-xl text-left font-bold ">Tips Pengisian Form</span>
                        <p class="text-sm text-left font-bold ">
                            1. Pilih nama karyawan terlebih dahulu<br>
                            2. Pilih role sesuai dengan karyawan yang dipilih<br>
                            3. Isi username (maksimal 12 karakter)<br>
                            4. Isi password (minimal 8 karakter)<br>
                            5. Periksa kembali data sebelum disimpan<br>
                        </p>                        
                    </div>          
                    <!--end::Form kanan-->
                </form>
                <!--end::Form akun-->
            </main>
        </div>
    </div>

<script>   
    document.addEventListener("DOMContentLoaded", function(){
        document.querySelectorAll("a").forEach(function (link){
            link.addEventListener("click", function(e){
                if(link.getAttribute("href") && link.getAttribute("href").charAt(0) !== "#"){
                    document.getElementById("loadingOverlay").classList.remove("hidden");
                }
            })
        })
    });   
    
    const toggleBtn = document.querySelector('[data-hs-toggle-password]');
    const targetInput = document.querySelector('#hs-toggle-password');

    toggleBtn.addEventListener('click', () => {
        const isPassword = targetInput.type === 'password';
        targetInput.type = isPassword ? 'text' : 'password';

        toggleBtn.querySelectorAll('.hs-password-active\\:hidden, .hs-password-active\\:block').forEach(el => {
            el.classList.toggle('hidden');
            el.classList.toggle('block');
        });
    });
</script>
@vite(['resources/js/modal.js', 'resources/js/buatAkun.js'])
</body>
</html>