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
                <button class="flex px-3 py-1 rounded-lg border border-[#E21B1B] text-[#E21B1B] cursor-pointer">Hapus</button>
            </div>
        </div>
    </div>
<script>
</script>