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
    <!--begin::Loading-->
    <div id="loadingOverlay" class="hidden fixed inset-0 flex z-99 w-screen justify-center items-center">
        @include('components.loading')
    </div>
    <!--end::Loading-->
    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main class="p-4 gap-4 m-3">
                <div class="w-full max-w-screen-xl mx-auto">
                    <div class="flex flex-">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Registrasi Akun</span>
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="{{ route('akun.index') }}" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                                Daftar Akun
                                            </a>
                                        </div>  
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400 hover:text-[#029C55]">Registrasi Akun</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>
                
                <!--begin::Form kunjungan-->
                <form class="grid grid-cols-1 md:grid-cols-2">
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full bg-white rounded-xl gap-4 mt-6 shadow-sm p-4">                       
                        <div class="flex md:flex-col border border-gray-300 rounded-lg p-2.5">
                            <div class="flex flex-row gap-2">
                                <div class="mb-5 w-full">
                                    <label for="divisi" class="block mb-2 text-sm font-medium text-gray-900">Divisi</label>
                                    <input type="text" id="divisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="Resepsionis" disabled />
                                </div>
                                <div class="mb-5 w-full">
                                    <label for="namaKaryawan" class="block mb-2 text-sm font-medium text-gray-900">Nama Karyawan</label>
                                    <input type="text" id="namaKaryawan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="Maitsa Luthfiyyah" disabled />
                                </div>
                            </div>
                            <div class="flex flex-row text-xs items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
                                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                                </svg>
                                <span>Divisi dan Nama Karyawan tidak dapat diubah.</span>
                            </div>
                        </div>
                        <div class="mb-5 w-full">
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                            <input type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="maitsa.luthfi" disabled />
                        </div>
                        <!--begin::Password baru-->
                        <div class="mb-5 w-full">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password Baru <span class="text-xs text-[#e21b1b]">*</span></label>
                            <div class="relative">
                                <input id="hs-toggle-password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Password minimal 8 karakter">
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
                        <!--end::Password baru-->
                        <!--begin::Konfirmasi password-->
                        <div class="mb-5 w-full">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password Baru <span class="text-xs text-[#e21b1b]">*</span></label>
                            <div class="relative">
                                <input id="hs-toggle-confirmPassword" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Password minimal 8 karakter">
                                <button type="button" data-hs-toggle-password='{
                                    "target": "#hs-toggle-confirmPassword"
                                }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path class="hs-confirmPassword-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                        <path class="hs-confirmPassword-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                        <path class="hs-confirmPassword-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                        <line class="hs-confirmPassword-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                        <path class="hidden hs-confirmPassword-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle class="hidden hs-confirmPassword-active:block" cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!--end::Konfirmasi password-->
                        
                        <div class="flex text-sm w-full justify-end items-end gap-2">
                            <button type="submit" class="p-2.5 px-7 rounded-lg bg-[#029C55] justify-center items-center text-white">Simpan</button>
                            <button class="p-2.5 px-7 rounded-lg bg-gray-50 border border-gray-300 justify-center items-center">Batal</button>
                        </div>
                        
                    </div>
                    <!--end::Form kiri-->
                </form>
                <!--end::Form kunjungan-->
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
    
    document.querySelectorAll('[data-hs-toggle-password]').forEach(button => {
        const targetSelector = JSON.parse(button.getAttribute('data-hs-toggle-password')).target;
        const input = document.querySelector(targetSelector);

        button.addEventListener('click', () => {
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        
        button.querySelectorAll('.hs-password-active\\:hidden, .hs-password-active\\:block, .hs-confirmPassword-active\\:hidden, .hs-confirmPassword-active\\:block').forEach(el => {
            el.classList.toggle('hidden');
            el.classList.toggle('block');
        });
        });
    });
</script>



</body>
</html>