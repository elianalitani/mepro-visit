    <div class="absolute hidden right-70 mt-90 w-fit z-50 shadow-md" id="filterDropdown">
        <div id="filterForm">
            <!--begin::Segitiga-->
            <div class="w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[10px] border-b-green-600 mx-auto -mt-2"></div>     
            <!-- begin::Filter tanggal-->
            <div class="bg-white border border-[#029C55]">
                <div class="bg-[#029C55] p-1 text-white font-bold text-center border-[#2d2d2b25]">    
                    Tanggal
                </div>
                <!--begin::Content-->
                <div class="flex flex-row items-center p-4 text-sm font-medium">
                    <span>Tanggal awal:</span>
                    <input type="date" id="tanggalAwal" class="w-full px-3 py-2 border border-[#2d2d2b25] rounded-md focus:outline-none focus:ring" placeholder="Tanggal Awal (DD/MM/YYYY)" />
                </div>
                <div class="flex flex-row items-center p-4 text-sm">
                    <span>Tanggal akhir:</span>
                    <input type="date" id="tanggalAkhir" class="w-full px-3 py-2 border border-[#2d2d2b25] rounded-md focus:outline-none focus:ring" placeholder="Tanggal Akhir (DD/MM/YYYY)" />
                </div>
                <!--end::Content-->
            </div>
            <!--end::Filter tanggal-->

            <!--begin::Filter status-->
            <div class="bg-white">
                <div class="bg-[#029C55] p-1 text-white font-bold text-center border-[#2d2d2b25]">    
                    Status
                </div>
                <!--begin::Content-->
                <div class=" justify-around items-center p-4 text-sm font-medium">
                    <!--begin::Entry dropdown -->
                    <div class="flex gap-2 items-center text-sm">
                        <button id="dropdownStatusButton" data-dropdown-toggle="dropdownStatusMenu" class="flex w-full px-2 py-1 justify-between items-center rounded-sm cursor-pointer" type="button">
                        <span id="selectedStatus">Pilih status</span>
                            <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>

                        <div id="dropdownStatusMenu" class="z-10 hidden divide-y divide-gray-100 bg-white rounded-lg shadow-sm cursor-pointer hidden">
                            <ul class="py-2 text-sm" aria-labelledby="dropdownStatusButton">
                                <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="Selesai">Selesai</a></li>
                                <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="Sudah bertemu">Sudah bertemu</a></li>
                                <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="Sedang berlangsung">Sedang berlangsung</a></li>
                                <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="Menunggu">Menunggu</a></li>
                                <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="Dibatalkan">Dibatalkan</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end::Entry dropdown-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Filter status-->
            
            <!--begin::Filter alphabetical-->
            <div class="bg-white">
                <div class="bg-[#029C55] p-1 text-white font-bold text-center border-[#2d2d2b25]">    
                    Sorting
                </div>
                <!--begin::Content-->
                <div class="grid grid-cols-3 justify-around items-center p-4 text-sm font-medium">
                    <span>Nama:</span>

                    <label class="cursor-pointer relative">
                        <input type="radio" name="sort" value="asc" class="hidden peer" />
                        <span class="relative peer-checked:font-semibold transition-all duration-300
                                    before:content-[''] before:absolute before:left-0 before:-bottom-1
                                    before:h-[2px] before:bg-[#029C55] before:w-0 
                                    peer-checked:before:w-full before:transition-all before:duration-300">
                            A-Z
                        </span>
                    </label>

                    <label class="cursor-pointer relative">
                        <input type="radio" name="sort" value="desc" class="hidden peer" />
                        <span class="relative peer-checked:font-semibold transition-all duration-300
                                    before:content-[''] before:absolute before:left-0 before:-bottom-1
                                    before:h-[2px] before:bg-[#029C55] before:w-0 
                                    peer-checked:before:w-full before:transition-all before:duration-300">
                            Z-A
                        </span>
                    </label>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Filter alphabetical -->
            
            <div class="flex items-center justify-center gap-2 p-2 bg-white text-center text-sm">
                <button id="applyFilter" class="flex px-3 py-1 rounded-lg border border-[#029C55] text-[#029C55] cursor-pointer">Terapkan</button>
                <button id="resetFilter" class="flex px-3 py-1 rounded-lg border border-[#E21B1B] text-[#E21B1B] cursor-pointer">Hapus</button>
            </div>
        </div>
    </div>
<script>
</script>