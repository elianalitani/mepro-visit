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
                            <span class="text-md sm:text-xl font-bold">Detail Kunjungan</span>
                            
                            <!--begin::Breadcrumbs-->
                            <nav class="flex hidden sm:block" aria-label="Breadcrumb">
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
                                            <a href="{{ route('kunjungan.index') }}" class="inline-flex items-center text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
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
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6 sm:p-10 mt-6 bg-white rounded-xl shadow-sm">
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full justify-center items-center">
                        <div class="mb-3 items-center text-center hidden sm:block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-32 mx-auto">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                            </svg>
                            <div class="text-lg">{{ $kunjungan->nama_tamu }}</div>
                            <div class="text-md text-gray-500">{{ $kunjungan->instansi }}</div>
                        </div>
                        <div class="space-y-3 hidden sm:block">
                            <div class="flex justify-between">
                                <div class="w-48 text-gray-500">No. Identitas</div>
                                <div class="text-black font-medium">{{ $kunjungan->no_identitas }}</div>
                            </div>
                            <div class="flex justify-between">
                                <div class="w-48 text-gray-500">Status</div>
                                <div id="statusBox" class="w-fit p-1 px-4 border rounded-full text-center font-medium
                                    @if($kunjungan->status == 'Menunggu') border-[#fad230] text-[#fad230]
                                    @elseif($kunjungan->status == 'Sedang berlangsung') border-[#3171DA] text-[#3171DA]
                                    @elseif($kunjungan->status == 'Sudah bertemu') border-[#F97316] text-[#F97316]
                                    @elseif($kunjungan->status == 'Dibatalkan') border-[#E21B1B] text-[#E21B1B]
                                    @else border-[#029C55] text-[#029C55]
                                    @endif
                                    ">{{ $kunjungan->status }}
                                </div>
                            </div>
                        </div>    
                    </div>
                    <!--end::Form kiri-->
                            
                    <!--begin::Form kanan-->
                    <div class="flex-col space-y-3">
                        <div class="flex hidden sm:block">
                            <div class="text-lg text-black font-bold">Detail Kunjungan</div>
                        </div>
                        <div class="block sm:hidden space-y-3">
                            <div class="flex flex-col sm:flex-row">
                                <div class="w-48 text-gray-500">Nama Tamu</div>
                                <div class="text-black font-medium">{{ $kunjungan->nama_tamu }}</div>
                            </div>
                            <div class="flex flex-col sm:flex-row">
                                <div class="w-48 text-gray-500">Instansi</div>
                                <div class="text-black font-medium">{{ $kunjungan->instansi }}</div>
                            </div>
                            <div class="flex flex-col sm:flex-row">
                                <div class="w-48 text-gray-500">No. Identitas</div>
                                <div class="text-black font-medium">{{ $kunjungan->no_identitas }}</div>
                            </div>
                            <div class="flex flex-col sm:flex-row">
                                <div class="w-48 text-gray-500">Status</div>
                                <div id="statusBox" class="w-fit p-1 px-4 border rounded-full text-center font-medium
                                    @if($kunjungan->status == 'Menunggu') border-[#fad230] text-[#fad230]
                                    @elseif($kunjungan->status == 'Sedang berlangsung') border-[#3171DA] text-[#3171DA]
                                    @elseif($kunjungan->status == 'Sudah bertemu') border-[#F97316] text-[#F97316]
                                    @elseif($kunjungan->status == 'Dibatalkan') border-[#E21B1B] text-[#E21B1B]
                                    @else border-[#029C55] text-[#029C55]
                                    @endif
                                    ">{{ $kunjungan->status }}
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Tanggal Kunjungan</div>
                            <div class="text-black font-medium">{{ \Carbon\Carbon::parse($kunjungan->tanggal_kunjungan)->format('d-m-Y') }}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Waktu Kedatangan</div>
                            <div class="text-black font-medium">{{ \Carbon\Carbon::parse($kunjungan->waktu_kedatangan)->format('H:i') }}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Pihak Tujuan</div>
                            <div class="text-black font-medium">{{ $kunjungan->karyawan->nama ?? '-' }}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Divisi</div>
                            <div class="text-black font-medium">{{ $kunjungan->karyawan->divisi->nama_divisi ?? '-' }}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Keperluan</div>
                            <div class="text-black font-medium">{{ $kunjungan->keperluan }}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Nama Satpam</div>
                            <div class="text-black font-medium">{{ $kunjungan->satpam->karyawan->nama ?? '-'}}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Nama Resepsionis</div>
                            <div class="text-black font-medium">{{ $kunjungan->resepsionis->karyawan->nama ?? '-'}}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Waktu Modifikasi</div>
                            <div class="text-black font-medium">{{ $kunjungan->waktu_kepulangan ? $kunjungan->waktu_kepulangan->format('H:i') : '-' }}</div>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <div class="w-48 text-gray-500">Waktu Kepulangan</div>
                            <div class="text-black font-medium">{{ $kunjungan->waktu_kepulangan ? $kunjungan->waktu_kepulangan->format('H:i') : '-' }}</div>
                        </div>
                        
                        <!--begin::Buttons-->
                        <div class="flex flex-wrap gap-2 justify-end items-end text-sm">
                            @if(session('role') === 'Satpam')
                            <button onclick=selesaiKunjungan() class="flex gap-2 p-2.5 px-3 sm:px-4 justify-center items-center bg-[#029C55] rounded-lg text-xs sm:text-sm text-white font-bold cursor-pointer">
                                Selesai
                            </button>
                            @endif
                            
                            <button class="flex gap-2 p-2.5 px-3 sm:px-4 justify-center items-center border border-[#029C55] rounded-lg text-xs sm:text-sm text-[#029C55] font-bold cursor-pointer">
                                Kembali
                            </button>
                            
                            @if(session('role') === 'Satpam')
                            <button class="flex gap-2 p-2.5 px-3 sm:px-4 justify-center items-center border border-[#029C55] rounded-lg text-xs sm:text-sm text-[#029C55] font-bold cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                Edit
                            </button>
                            @endif
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
    document.addEventListener("DOMContentLoaded", function(){
        document.querySelectorAll("a").forEach(function (link){
            link.addEventListener("click", function(e){
                if(link.getAttribute("href") && link.getAttribute("href").charAt(0) !== "#"){
                    document.getElementById("loadingOverlay").classList.remove("hidden");
                }
            })
        })
    });
    
    function selesaiKunjungan() {
        const box = document.getElementById("statusBox");
        box.innerText = "Selesai";
        
        box.className = box.className
        .replace(/border-\[[^\]]+\]/g, "")
        .replace(/text-\[[^\]]+\]/g, "")
        .trim();
        
        box.classList.add("border-[#029C55]", "text-[#029C55]");
    }
</script>

</body>
</html>