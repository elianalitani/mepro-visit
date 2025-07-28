<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main class="p-4 gap-4 m-3">
                <div class="w-full max-w-screen-xl mx-auto">
                    <!--begin::Overview-->
                    <div class="flex flex-col">
                        <span class="text-xl font-bold">Daftar Kunjungan</span>
                    </div>
                    <!--end::Overview-->
                    
                    <!--begin::Breadcrumbs-->
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                            <li class="inline-flex items-center">
                                <a href="/admin" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                    Dashboard
                                </a>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                    </svg>
                                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400 hover:text-[#029C55">Daftar Kunjungan</span>
                                </div>  
                            </li>
                        </ol>
                    </nav>
                    <!--end::Breadcrumbs-->
                    
                    <div class="bg-white h-fit rounded-xl gap-3 mt-10 overflow-auto shadow-sm p-4">
                    <!--begin::Table-->
                        <table id="tableKunjungan" class="table-auto w-full">
                            <thead>
                                <tr class="text-gray-500 text-center">
                                    <th>Nama Tamu</th>
                                    <th>Instansi</th>
                                    <th>Tanggal</th>
                                    <th>Pihak Tujuan</th>
                                    <th>Divisi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Maitsa Luthfiyyah</td>
                                    <td class="px-4 py-3">Telkom University</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Ian Mariana Wati</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <!--begin::DUMMY. NANTI DIHAPUS.-->
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-[#029C5525]">
                                    <td class="px-4 py-3">Eliana Litani Tinaningtyas</td>
                                    <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Bambang Heru Nugroho</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">
                                        <div class="p-1 rounded-full border border-[#fad230] text-[#fad230] text-center font-medium">Menunggu</div>        
                                    </td>
                                    <td>
                                        <div class="flex flex-row gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <!--end::DUMMY. NANTI DIHAPUS-->
                                </tbody>
                        </table>
                    <!--end::Table-->
                    </div>
                </div>
            </main>
        </div>
    </div>
    
<script>
    $(document).ready(function () {
        // Inisialisasi DataTables
        var visitorTable = $('#tableKunjungan').DataTable({
            "aaSorting": [],
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "info": false,
            "ordering": false,
            "language": {
                "paginate": {
                    "previous": "< Sebelumnya",
                    "next": "Selanjutnya >"
                }
            },
            "drawCallback": function(){
                stylePagination();
                styleLengthDropdown();
            }
        });

        // Hubungkan input pencarian ke DataTables
        $('#searchKunjungan').on('keyup', function () {
            visitorTable.search(this.value).draw();
        }); 
        
        styleLengthDropdown();
    });
    
    function stylePagination() {
    setTimeout(() => {
        const pagination = document.querySelector('.dataTables_paginate');
        if (!pagination) return;

        // Tambahkan class Tailwind ke elemen pagination
        pagination.classList.add('flex', 'gap-2', 'justify-end', 'items-center', 'text-sm');

        const pageLinks = pagination.querySelectorAll('a');
        pageLinks.forEach(link => {
            link.classList.add(
                'px-3', 'py-1', 'rounded-md', 'border', 'border-gray-300', 'hover:bg-gray-100',
                'text-gray-700', 'transition', 'duration-200'
            );
        });

        const active = pagination.querySelector('.current');
        if (active) {
            active.classList.remove('current');
            active.classList.add('bg-emerald-600', 'text-white', 'font-semibold');
        }
    }, 0);
    }
    
    function styleLengthDropdown() {
    setTimeout(() => {
        const wrapper = document.querySelector('.dataTables_length');
        if (!wrapper) return;

        wrapper.classList.add('flex', 'items-center', 'gap-2', 'text-sm', 'text-gray-700');

        const label = wrapper.querySelector('label');
        if (label) label.classList.add('flex', 'items-center', 'gap-2');

        const select = wrapper.querySelector('select');
        if (select) {
            select.classList.add(
                'border', 'border-gray-300', 'rounded-md',
                'py-1.5', 'px-3', 'text-sm', 'text-green-700',
                'focus:outline-none', 'focus:ring-2', 'focus:ring-emerald-500'
            );
        }
    }, 0);
    }
</script>

</body>
</html>