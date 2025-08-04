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
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
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
                            <span class="text-xl font-bold">Detail Kunjungan</span>
                            
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="/admin" class="inline-flex items-center text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="/admin/daftar-kunjungan" class="inline-flex items-center text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
                                                Daftar Kunjungan
                                            </a>
                                        </div>  
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 md:ms-2 text-sm text-gray-500 font-medium hover:text-[#029C55]">Detail Kunjungan</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>
                
                <!--begin::Form kunjungan-->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-10 mt-6 bg-white rounded-xl shadow-sm">
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full justify-center items-center">
                        <div class="mb-3 justify-center items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-32 items-center">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                            </svg>
                            <div class="text-lg">Maitsa Luthfiyyah</div>
                            <div class="text-md text-gray-500">Telkom University</div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex">
                                <div class="w-48 text-gray-500">No. Identitas</div>
                                <div class="text-black font-medium">maitsaaaaaaaa.jpg</div>
                            </div>
                            <div class="flex">
                                <div class="w-48 text-gray-500">Status</div>
                                <div id="statusBox" class="p-1 px-4 border border-[#fad230] rounded-full text-[#fad230] text-center font-medium">Menunggu</div> 
                            </div>
                        </div>    
                    </div>
                    <!--end::Form kiri-->
                            
                    <!--begin::Form kanan-->
                    <div class="space-y-3">
                        <div class="flex">
                            <div class="text-lg text-black font-bold">Detail Kunjungan</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Tanggal Kunjungan</div>
                            <div class="text-black font-medium">10/07/2025</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Waktu Kedatangan</div>
                            <div class="text-black font-medium">10 : 30</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Pihak Tujuan</div>
                            <div class="text-black font-medium">Ian Mariana Wati</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Divisi</div>
                            <div class="text-black font-medium">MIS</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Keperluan</div>
                            <div class="text-black font-medium">Wawancara PKL</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Nama Satpam</div>
                            <div class="text-black font-medium">Budi Santoso</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Nama Resepsionis</div>
                            <div class="text-black font-medium">Ayu Lestari</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">TTD Pihak Tujuan</div>
                            <div class="text-black font-medium">NamaFile.png</div>
                        </div>
                        <div class="flex">
                            <div class="w-48 text-gray-500">Waktu Kepulangan</div>
                            <div class="text-black font-medium">--:--</div>
                        </div>
                        
                        <!--begin::Buttons-->
                        <div class="flex w-full gap-2 justify-end items-end text-sm">
                            <button onclick=ubahStatus() class="flex gap-2 p-2.5 px-4 justify-center items-center border border-[#029C55] rounded-lg text-[#029C55] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#029C55" class="size-4">
                                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                                </svg>
                                Selesai
                            </button>
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
                <!--end::Form kunjungan-->
            </main>
        </div>
    </div>

<script>
    function ubahStatus() {
        const box = document.getElementById("statusBox");
        box.innerText = "Selesai";
        box.classList.remove("border-[#fad230]", "text-[#fad230]");
        box.classList.add("border-[#029C55]", "text-[#029C55]");
    }
</script>

</body>
</html>