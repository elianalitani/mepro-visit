<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
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
                    <div class="flex flex-wrap justify-between">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-md sm:text-xl font-bold">Daftar Kunjungan</span>
                            
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:[space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-xs sm:text-sm text-[#029C55] font-medium underline hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 md:ms-2 text-xs sm:text-sm text-gray-500 font-medium hover:text-[#029C55]">Daftar Kunjungan</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                        
                        <!--begin::Options-->
                        <div class="flex flex-wrap gap-3 justify-center items-center">
                            <!--begin::Entry dropdown -->
                            <div class="flex gap-2 items-center text-sm">
                                <span class="hidden sm:block">Showing</span>

                                <button id="dropdownEntriesButton" data-dropdown-toggle="dropdownEntriesMenu" class="flex px-2 py-1 justify-center items-center bg-[#029C5560] rounded-sm shadow-sm cursor-pointer" type="button">
                                    <span id="selectedEntries">10</span>
                                    <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>

                                <div id="dropdownEntriesMenu" class="z-10 hidden divide-y divide-gray-100 bg-white rounded-lg shadow-sm cursor-pointer hidden">
                                    <ul class="py-2 text-sm" aria-labelledby="dropdownEntriesButton">
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="5">5</a></li>
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="10">10</a></li>
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="25">25</a></li>
                                        <li><a class="block px-4 py-2 hover:bg-[#eefbe8]" data-value="50">50</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end::Entry dropdown-->
                            
                            <!--begin::Filter button-->
                            <button id="filterButton" onclick="toggleFilter()" class="relative">
                                <div class="flex gap-2 px-2 py-1 justify-center items-center bg-white rounded-sm font-bold shadow-sm cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                                    </svg>
                                    <span class="hidden sm:block">Filter</span>
                                </div>
                            </button>
                            
                            @include('components.filter')
                            <!--end::Filter button-->
                            
                            <!--begin::Export button-->
                            <div class="flex gap-2 px-2 py-1 justify-center items-center bg-white rounded-sm font-bold shadow-sm cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                <span class="hidden sm:block">Unduh</span>
                            </div>
                            <!--end::Export button-->
                        </div>
                        <!--end::Options-->
                    </div>
                    
                    @include('components.visitorTableList')
                </div>
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
    
    $(document).ready(function () {
        // Inisialisasi DataTables
        var visitorTable = $('#tableKunjungan').DataTable({
            "aaSorting": [],
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "info": false,
            "ordering": false,
            "dom": 'lrtip',
            "language": {
                "zeroRecords": '<div class="text-center p-4 text-[#E21B1B] font-medium">Tidak ada data ditemukan</div>',
                "emptyTable": '<div class="text-center p-4 text-gray-500">Belum ada data kunjungan</div>',
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

        // Hubungkan pagination
        $('#dropdownEntriesMenu a').on('click', function (e) {
            e.preventDefault();

            const value = $(this).data('value');

            // Update tampilan angka pada tombol
            $('#selectedEntries').text(value);

            // Ganti jumlah entri yang ditampilkan DataTables
            visitorTable.page.len(value).draw();
        });
        
        styleLengthDropdown();
        
        document.addEventListener('click', function (e) {
            const button = document.getElementById('filterButton');
            const dropdown = document.getElementById('filterDropdown');

            if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
        
        document.getElementById('applyFilter').addEventListener('click', function () {
            const tanggalAwal = document.getElementById('tanggalAwal').value;
            const tanggalAkhir = document.getElementById('tanggalAkhir').value;
            const sortOrder = document.querySelector('input[name="sort"]:checked')?.value || "asc";

            const rows = Array.from(document.querySelectorAll('#bodyKunjungan tr'));

            // Filter tanggal
            rows.forEach(row => {
                const tanggal = row.cells[1].textContent.trim();
                let show = true;

                if (tanggalAwal && tanggal < tanggalAwal) show = false;
                if (tanggalAkhir && tanggal > tanggalAkhir) show = false;

                row.style.display = show ? '' : 'none';
            });

            // Sorting
            const visibleRows = rows.filter(row => row.style.display !== 'none');
            visibleRows.sort((a, b) => {
                const namaA = a.cells[0].textContent.trim().toLowerCase();
                const namaB = b.cells[0].textContent.trim().toLowerCase();
                return sortOrder === 'asc' ? namaA.localeCompare(namaB) : namaB.localeCompare(namaA);
            });

            // Masukkan kembali ke tbody
            const tbody = document.getElementById('#bodyKunjungan');
            visibleRows.forEach(row => tbody.appendChild(row));
        });
        
        $('#filterForm button:contains("Hapus")').on('click', function () {
            $('#tanggalAwal').val('');
            $('#tanggalAkhir').val('');
            $('input[name="sort"]').prop('checked', false);

            $.fn.dataTable.ext.search = [];
            visitorTable.order([]).draw();
        });
    });
    
    function stylePagination() {
    setTimeout(() => {
        const pagination = document.querySelector('.dataTables_paginate');
        if (!pagination) return;

        pagination.classList.add('flex', 'gap-2', 'mt-5', 'justify-between', 'items-center', 'text-sm', 'cursor-pointer');

        const pageLinks = pagination.querySelectorAll('a');
        pageLinks.forEach(link => {
            link.classList.add(
                'px-3', 'py-1', 'rounded-md', 'hover:bg-[#E8F5EC]',
                'text-gray-700', 'transition', 'duration-200', 'cursor-pointer'
            );
        });

        const active = pagination.querySelector('.current');
        if (active) {
            active.classList.remove('current');
            active.classList.add('bg-[#029C55]', 'text-white', 'font-semibold');
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
                'py-1.5', 'px-3', 'border', 'border-gray-300', 'rounded-md',
                'text-sm', 'text-green-700', 'focus:outline-none', 'focus:ring-2', 'focus:ring-[#029c55]-500'
            );
        }
    }, 0);
    }
    
    function toggleFilter(){
        const notification = document.getElementById('filterDropdown');
        notification.classList.toggle('hidden');
    }
</script>

</body>
</html>