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

            <main id="main" class="p-4 gap-4 m-3 transition-all duration-300">
                <div class="w-full max-w-screen-xl mx-auto ">
                    <div class="flex flex-">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Informasi Akun</span>
                            
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
                                            <span class="ms-1 md:ms-2 text-sm text-gray-500 font-medium hover:text-[#029C55]">Informasi Akun</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>
                
                <!--begin::Informasi akun-->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-10 mt-6 bg-white rounded-xl shadow-sm">
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full justify-center items-center">
                        <div class="mb-3 justify-center items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-32 items-center">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                            </svg>
                            <div class="text-lg">Maitsa Luthfiyyah</div>
                            <div class="text-md text-gray-500">maitsa.luthfi</div>
                        </div>
                    </div>
                    <!--end::Form kiri-->
                            
                    <!--begin::Form kanan-->
                    <div class="space-y-3">
                        <div class="flex">
                            <div class="text-lg text-black font-bold">Informasi Akun</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Username</div>
                            <div class="text-black font-medium">maitsa.luthfi</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Password</div>
                            <div class="text-black font-medium">$2y$10$9Pq0QGMR89O1seC9Tw</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Tanggal Dibuat</div>
                            <div class="text-black font-medium">08 Juli 2025</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Terakhir Diperbarui</div>
                            <div class="text-black font-medium">10 Juli 2025</div>
                        </div>
                                        
                        <!--begin::Buttons-->
                        <div class="flex w-full gap-2 justify-end items-end text-sm">
                            <button class="flex gap-2 p-2.5 px-4 justify-center items-center bg-[#029C55] rounded-lg text-white font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                </svg>
                                Edit
                            </button>
                            <button class="flex gap-2 p-2.5 px-4 justify-center items-center border border-[#E21B1B] rounded-lg text-[#E21B1B] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E21B1B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                                Hapus
                            </button>
                        </div>
                        <!--end::Buttons-->
                    </div>          
                    <!--end::Form kanan-->

                </div>
                <!--end::Informasi kunjungan-->
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