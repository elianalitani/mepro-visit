document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function (e) {
            if (link.getAttribute("href") && link.getAttribute("href").charAt(0) !== "#") {
                document.getElementById("loadingOverlay").classList.remove("hidden");
            }
        })
    })

    const btnFilter = document.getElementById("filterButton");

    if (btnFilter) {
        btnFilter.addEventListener("click", function () {
            toggleFilter();
        })
    }
});

$(document).ready(function () {
    var visitorTable = $('#tableKunjungan').DataTable({
        "aaSorting": [],
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "info": false,
        "ordering": false,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: document.getElementById('tableKunjungan').dataset.url,
            data: { mode: 'full' }
        },
        "columns": [
            { data: 'nama_tamu', name: 'nama_tamu' },
            { data: 'instansi', name: 'instansi' },
            { data: 'tanggal_kunjungan', name: 'tanggal_kunjungan' },
            { data: 'waktu_kedatangan', name: 'waktu_kedatangan' },
            { data: 'waktu_kepulangan', name: 'waktu_kepulangan' },
            { data: 'pihak_tujuan', name: 'pihak_tujuan' },
            { data: 'divisi', name: 'divisi' },
            { data: 'status', name: 'status' },
            { data: 'aksi', name: 'aksi', orderable: false, searchable: false }
        ],
        "createdRow": function (row) {
            $(row).addClass('bg-white border-b border-[#029C5525]');
        },
        "dom": 'lrtip',
        "language": {
            "zeroRecords": '<div class="text-center p-4 text-[#E21B1B] font-medium">Tidak ada data ditemukan</div>',
            "emptyTable": '<div class="text-center p-4 text-gray-500">Belum ada data kunjungan</div>',
            "paginate": {
                "previous": "< Sebelumnya",
                "next": "Selanjutnya >"
            }
        },
        "drawCallback": function () {
            stylePagination();
            styleLengthDropdown();
        }
    });

    // Searching
    $('#searchKunjungan').on('keyup', function () {
        visitorTable.search(this.value).draw();
    });

    // Pagination
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

function toggleFilter() {
    const notification = document.getElementById('filterDropdown');
    notification.classList.toggle('hidden');
}