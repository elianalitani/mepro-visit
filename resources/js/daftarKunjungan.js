document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function (e) {
            if (
                link.getAttribute("href") &&
                link.getAttribute("href").charAt(0) !== "#"
            ) {
                document
                    .getElementById("loadingOverlay")
                    .classList.remove("hidden");
            }
        });
    });

    const btnFilter = document.getElementById("filterButton");

    if (btnFilter) {
        btnFilter.addEventListener("click", function () {
            toggleFilter();
        });
    }

    /* Memunculkan modal konfirmasi */
    document.addEventListener("click", function (e) {
        const btn = e.target.closest(".selesai-kunjungan");
        if (!btn) return;

        e.preventDefault();

        openModal({
            variant: "yakin",
            titleText: "Peringatan",
            messageText:
                "Apakah Anda yakin data sudah benar? Silakan periksa kembali sebelum disimpan.",
            show: ["yakin", "warnYellow"],
            onSuccess: () => {
                closeModal();
            },
        });
    });

    /* Memunculkan modal pembatalan */
    document.addEventListener("click", function (e) {
        const btn = e.target.closest(".batal-kunjungan");
        if (!btn) return;

        e.preventDefault();

        const actionBatal = btn.getAttribute("action");
        document
            .getElementById("formBatal")
            .setAttribute("action", actionBatal);

        showConfirmModal({
            onConfirm: () => {
                const checkbox = document.getElementById("default-checkbox");
                const deskripsi = document
                    .getElementById("deskripsi")
                    .value.trim();

                if (!checkbox.checked) {
                    alert("Harap centang pernyataan terlebih dahulu!");
                    return;
                }

                if (deskripsi === "") {
                    alert("Harap isi alasan pembatalan!");
                    return;
                }

                document.getElementById("formBatal").onsubmit();
            },
        });
    });
});

$(document).ready(function () {
    var visitorTable = $("#tableKunjungan").DataTable({
        aaSorting: [],
        paging: true,
        lengthChange: false,
        searching: true,
        info: false,
        ordering: false,
        processing: true,
        serverSide: true,
        ajax: {
            url: document.getElementById("tableKunjungan").dataset.url,
            data: function (d) {
                d.mode = "full";
                d.tanggal_awal = $("#tanggalAwal").val();
                d.tanggal_akhir = $("#tanggalAkhir").val();
                d.sort = $('input[name="sort"]:checked').val();
                d.status = $("#selectedStatus").data("value");
            },
        },
        columns: [
            { data: "nama_tamu", name: "nama_tamu" },
            { data: "instansi", name: "instansi" },
            { data: "tanggal_kunjungan", name: "tanggal_kunjungan" },
            { data: "waktu_kedatangan", name: "waktu_kedatangan" },
            { data: "waktu_kepulangan", name: "waktu_kepulangan" },
            { data: "pihak_tujuan", name: "pihak_tujuan" },
            { data: "divisi", name: "divisi" },
            { data: "status", name: "status" },
            { data: "aksi", name: "aksi", orderable: false, searchable: false },
        ],
        createdRow: function (row) {
            $(row).addClass("bg-white border-b border-[#029C5525]");
        },
        dom: "lrtip",
        language: {
            zeroRecords:
                '<div class="text-center p-4 text-[#E21B1B] font-medium">Tidak ada data ditemukan</div>',
            emptyTable:
                '<div class="text-center p-4 text-gray-500">Belum ada data kunjungan</div>',
            paginate: {
                previous: "< Sebelumnya",
                next: "Selanjutnya >",
            },
        },
        drawCallback: function () {
            stylePagination();
            styleLengthDropdown();
        },
    });

    // Searching
    $("#searchKunjungan").on("keyup", function () {
        visitorTable.search(this.value).draw();
    });

    // Pagination
    $("#dropdownEntriesMenu a").on("click", function (e) {
        e.preventDefault();

        const value = $(this).data("value");

        // Update tampilan angka pada tombol
        $("#selectedEntries").text(value);

        // Ganti jumlah entri yang ditampilkan DataTables
        visitorTable.page.len(value).draw();
    });

    styleLengthDropdown();

    document.addEventListener("click", function (e) {
        const button = document.getElementById("filterButton");
        const dropdown = document.getElementById("filterDropdown");

        if (!button.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add("hidden");
        }
    });

    /* Memakai filter */
    $("#applyFilter").on("click", function () {
        visitorTable.ajax.reload();
    });

    /* Menghapus */
   $("#resetFilter").on("click", function () {
       $("#tanggalAwal").val("");
       $("#tanggalAkhir").val("");
       $('input[name="sort"]').prop("checked", false);
       $("#selectedStatus").data("value", "");
       $("#selectedStatus").text("Pilih status");
       visitorTable.ajax.reload();
   });

    /* Filtering: by status */
    $("#dropdownStatusMenu a").on("click", function (e) {
        e.preventDefault();
        const value = $(this).data("value");
        $("#selectedStatus").text(value);
        $("#selectedStatus").data("value", value);
        $("#dropdownStatusMenu").addClass("hidden");
        visitorTable.ajax.reload();
    });
});

function stylePagination() {
    setTimeout(() => {
        const pagination = document.querySelector(".dataTables_paginate");
        if (!pagination) return;

        pagination.classList.add(
            "flex",
            "gap-2",
            "mt-5",
            "justify-between",
            "items-center",
            "text-sm",
            "cursor-pointer"
        );

        const pageLinks = pagination.querySelectorAll("a");
        pageLinks.forEach((link) => {
            link.classList.add(
                "px-3",
                "py-1",
                "rounded-md",
                "hover:bg-[#E8F5EC]",
                "text-gray-700",
                "transition",
                "duration-200",
                "cursor-pointer"
            );
        });

        const active = pagination.querySelector(".current");
        if (active) {
            active.classList.remove("current");
            active.classList.add("bg-[#029C55]", "text-white", "font-semibold");
        }
    }, 0);
}

function styleLengthDropdown() {
    setTimeout(() => {
        const wrapper = document.querySelector(".dataTables_length");
        if (!wrapper) return;

        wrapper.classList.add(
            "flex",
            "items-center",
            "gap-2",
            "text-sm",
            "text-gray-700"
        );

        const label = wrapper.querySelector("label");
        if (label) label.classList.add("flex", "items-center", "gap-2");

        const select = wrapper.querySelector("select");
        if (select) {
            select.classList.add(
                "py-1.5",
                "px-3",
                "border",
                "border-gray-300",
                "rounded-md",
                "text-sm",
                "text-green-700",
                "focus:outline-none",
                "focus:ring-2",
                "focus:ring-[#029c55]-500"
            );
        }
    }, 0);
}

function toggleFilter() {
    const notification = document.getElementById("filterDropdown");
    notification.classList.toggle("hidden");
}
