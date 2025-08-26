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

            <main id="main" class="p-4 gap-4 m-3 transition-all duration-300">
                <div class="w-full max-w-screen-xl mx-auto">
                    <div class="flex">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Form Kunjungan</span>
                            
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-xs sm:text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="{{ route('kunjungan.index') }}" class="inline-flex items-center text-xs sm:text-sm text-[#029C55] underline font-medium whitespace-nowrap hover:text-[#029c5550]">
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
                <form action="{{ route('kunjungan.tambah') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 mt-6 bg-white rounded-xl shadow-sm">
                    @csrf
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full mb-5">
                        <!--begin::Nama tamu-->
                        <div class="mb-5 w-full">
                            <label for="namaTamu" class="block mb-2 text-sm text-gray-900 font-medium">Nama Tamu <span class="text-xs text-[#e21b1b]">*</span></label>
                            <input type="text" name="nama_tamu" id="namaTamu" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Masukkan nama lengkap tamu" required />
                        </div>
                        <!--end::Nama tamu-->
                        
                        <!--begin::Foto identitas dan instansi-->
                        <div class="flex flex-col md:flex-row gap-4">
                            
                            <!--begin::Nomor identitas-->
                            <div class="mb-5 w-full">
                                <label for="identitas" class="block mb-2 text-sm text-gray-900 font-medium">Nomor Identitas <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" name="no_identitas" id="identitas" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Contoh: KTP/SIM/Paspor" required />
                            </div>
                            <!--end::Nomor identitas-->
                            
                            <!--begin::Instansi-->
                            <div class="mb-5 w-full">
                                <label for="instansi" class="block mb-2 text-sm text-gray-900 font-medium">Instansi <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="text" name="instansi" id="instansi" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Nama instansi asal" required />
                            </div>
                            <!--end::Instansi-->
                        </div>
                        <!--end::Foto identitas dan instansi-->
                        
                        <!--begin::Keperluan-->
                        <div class="mb-5">
                            <label for="large-input" class="block mb-2 text-sm text-gray-900 font-medium">Keperluan <span class="text-xs text-[#e21b1b]">*</span></label>
                            <textarea type="text" name="keperluan" id="large-input" class="block w-full h-full p-2 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" placeholder="Tuliskan keperluan tamu" required></textarea>
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
                            <label for="pihakTujuan" class="block mb-2 text-sm text-gray-900 font-medium">
                                Pihak Tujuan <span class="text-xs text-[#e21b1b]">*</span>
                            </label>                              
                            
                            <!--begin::Dropdown-->
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownTujuan"
                                class="flex w-full p-2.5 justify-between items-center border border-gray-300 rounded-lg text-sm text-gray-900 bg-white"
                                type="button">
                                <span id="selectedKaryawan">Pilih pihak tujuan</span>
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>

                            <!--begin::Dropdown menu -->
                            <div id="dropdownTujuan"
                                class="z-10 hidden w-59 bg-white border border-gray-200 rounded-lg shadow-md">
                                
                                <!-- Search input -->
                               <div class="p-2">
                                        <input type="text" id="searchKaryawan" placeholder="Cari Karyawan..."
                                            class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-500"/>
                                </div>
                                    <ul id="dropdownList" class="py-2 text-sm max-h-60 overflow-y-auto" aria-labelledby="dropdownDefaultButton">
                                        @foreach($karyawan as $k)
                                        <li class="karyawan-item">
                                            <a href="#" 
                                            class="block px-4 py-2 hover:bg-[#eefbe8]" 
                                            onclick="event.preventDefault(); pilihKaryawan('{{ $k->nip }}', '{{ $k->nama }}', '{{ $k->id_divisi }}')">
                                                {{ $k->nama ?? '-' }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                
                                <input type="hidden" name="id_karyawan" id="id_karyawan" required>
                            </div>
                            <!--end::Dropdown menu-->                                
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Pihak tujuan-->

                        <!--begin::Divisi tujuan-->
                        <div class="mb-5 w-full">
                            <label for="divisiTujuan" class="block mb-2 text-sm text-gray-900 font-medium">Divisi Tujuan <span class="text-xs text-[#e21b1b]">*</span></label>                              
                            
                            <!--begin::Dropdown-->
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownDivisi"
                                class="flex w-full p-2.5 justify-between items-center border border-gray-300 rounded-lg text-sm text-gray-900 bg-white"
                                type="button">
                                <span id="selectedDivisi">Pilih divisi tujuan</span>
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>

                            <!--begin::Dropdown menu -->
                            <div id="dropdownDivisi"
                                class="z-10 hidden w-70 bg-white border border-gray-200 rounded-lg shadow-md">
                                
                                <!-- Search input -->
                                <div class="p-2">
                                    <input type="text" id="dropdownSearch" placeholder="Cari divisi tujuan..."
                                        class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-500"/>
                                </div>
                                
                                <!-- List items -->
                                <ul class="max-h-60 overflow-y-auto py-2 text-sm">
                                    @foreach ($divisi as $d)
                                    <li>
                                        <a href="#"
                                        class="block px-4 py-2 hover:bg-[#eefbe8] cursor-pointer"
                                        onclick="event.preventDefault(); pilihDivisi('{{ $d->id_divisi }}', '{{ $d->nama_divisi }}'">
                                            {{ $d->nama_divisi ?? '-' }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                
                                <input type="hidden" name="id_divisi" id="id_divisi" required>
                            </div>
                            <!--end::Dropdown menu-->                                
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Divisi tujuan-->

                        </div>
                        <!--end::Pihak dan divisi tujuan-->
                        
                        <!--begin::Nama satpam dan resepsionis-->
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="mb-5 w-full">
                                <label for="satpam" class="block mb-2 text-sm text-gray-900 font-medium">Satpam <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="hidden" name="id_user_satpam" value="{{ Auth::user()->role == 'Satpam' ? Auth::user()->id_user : null}}">
                                <input 
                                    type="text" id="satpam"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" 
                                    @if(Auth::user()->role == 'Satpam')
                                        value="{{ Auth::user()->karyawan->nama }}"
                                        required
                                        disabled
                                    @else
                                        value=""
                                        disabled
                                    @endif
                                    placeholder="{{ Auth::user()->role == 'Satpam' ? 'Masukkan nama satpam' : '' }}" 
                                />
                            </div>
                            
                            <div class="mb-5 w-full">
                                <label for="resepsionis" class="block mb-2 text-sm text-gray-900 font-medium">Resepsionis <span class="text-xs text-[#e21b1b]">*</span></label>
                                <input type="hidden" name="id_user_resepsionis" value="{{ Auth::user()->role == 'Resepsionis' ? Auth::user()->id_user : null}}">
                                <input 
                                type="text" id="resepsionis"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900" 
                                    @if(Auth::user()->role == 'Resepsionis')
                                        value="{{ Auth::user()->karyawan->nama }}"
                                        required
                                        disabled
                                    @else
                                        value=""
                                        disabled
                                    @endif
                                    placeholder="{{ Auth::user()->role == 'Resepsionis' ? 'Masukkan nama resepsionis' : '' }}" 
                                />
                            </div>
                        </div>
                        <!--end::Nama satpam dan resepsionis-->
                        
                        <!--begin::Button-->
                        <div class="flex w-full justify-end items-end gap-2 text-sm">
                            <button type="submit" class="p-2.5 px-7 justify-center items-center bg-[#029C55] rounded-lg text-white">Simpan</button>
                            <button class="p-2.5 px-7 justify-center items-center bg-gray-50 border border-gray-300 rounded-lg">Batal</button>
                        </div>
                        <!--end::Button-->
                    </div>          
                    <!--end::Form kanan-->
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

        document.addEventListener('click', function(e){
            const btn = e.target.closest('#btnSimpan');
            if (!btn) return;
            e.preventDefault();

            openModal({
                variant: 'warning',
                titleText: 'Peringatan',
                messageText: 'Apakah Anda yakin data sudah benar? Silakan periksa kembali sebelum disimpan.',
                show: ['yakin','warnYellow'],
                onYakin: () => {
                    document.getElementById("formEditKunjungan").submit();
                }
            });
        });

        function pilihKaryawan(nip, nama, id_divisi) {
            document.getElementById('id_karyawan').value = nip; 
            document.getElementById('selectedKaryawan').textContent = nama;

            const divisiMap = @json($divisi->pluck('nama_divisi','id_divisi'));

            if (id_divisi && divisiMap[id_divisi]) {
                pilihDivisi(id_divisi, divisiMap[id_divisi]);
                }
            }
        
        function pilihDivisi(id, nama) {
            document.getElementById('id_divisi').value = id; 
            document.getElementById('selectedDivisi').textContent = nama;
        }

        document.getElementById("searchKaryawan").addEventListener("keyup", function() {
            let filter = this.value.toLowerCase();
            let list = document.querySelectorAll("#dropdownList li.karyawan-item");

            list.forEach(item => {
                let text = item.textContent.toLowerCase();
                item.style.display = text.includes(filter) ? "" : "none";
            });
        });
    </script>
</body>
</html>