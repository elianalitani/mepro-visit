document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelectorAll("a[href]:not([href='javascript:void(0)'])")
        .forEach(function (link) {
            link.addEventListener("click", function (e) {
                if (
                    link.getAttribute("href") &&
                    link.getAttribute("href").charAt(0) !== "#" &&
                    link.getAttribute("href") !== "javascript:void(0)"
                ) {
                    document
                        .getElementById("loadingOverlay")
                        .classList.remove("hidden");
                }
            });
        });

    document.addEventListener("click", function (e) {
        const btn = e.target.closest(".btn-reset-akun");
        if (!btn) return;
        e.preventDefault();

        const userId = btn.dataset.id;
        const userEmail = btn.dataset.email;

        document.getElementById("resetUserId").value = userId;
        document.getElementById("resetEmailText").textContent = userEmail;
        document.getElementById("resetEmailInput").value = userEmail;

        // langsung set action form di sini
        let form = document.getElementById("resetForm");
        form.action = "/akun/" + userId + "/reset";
        // tampilkan modal
        document.getElementById("resetModal").classList.remove("hidden");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const btnResetBatal = document.getElementById("btnResetBatal");
    if (btnResetBatal) {
        btnResetBatal.addEventListener("click", () => {
            hideResetModal();
        });
    }
});

$(document).ready(function () {
    // Inisialisasi DataTables
    var visitorTable = $("#tableAkun").DataTable({
        aaSorting: [],
        paging: true,
        lengthChange: false,
        searching: true,
        info: false,
        ordering: false,
        processing: true,
        serverSide: true,
        ajax: {
            url: document.getElementById("tableAkun").dataset.url,
            data: { mode: "full" },
        },
        columns: [
            {
                data: "DT_RowIndex",
                render: (data) => `${data}`,
                className: "text-center",
                orderable: false,
                searchable: false,
            },
            { data: "nama_karyawan", name: "nama_karyawan" },
            { data: "role", name: "role" },
            {
                data: "created_at",
                name: "created_at",
                orderable: false,
                searchable: false,
            },
            {
                data: "updated_at",
                name: "updated_at",
                orderable: false,
                searchable: false,
            },
            {
                data: "status",
                name: "status",
                orderable: false,
                searchable: false,
            },
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
                '<div class="text-center p-4 text-gray-500">Belum ada data akun</div>',
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

    // Hubungkan input pencarian ke DataTables
    $("#searchKunjungan").on("keyup", function () {
        visitorTable.search(this.value).draw();
    });

    // Hubungkan pagination
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

    document
        .getElementById("applyFilter")
        .addEventListener("click", function () {
            const tanggalAwal = document.getElementById("tanggalAwal").value;
            const tanggalAkhir = document.getElementById("tanggalAkhir").value;
            const sortOrder =
                document.querySelector('input[name="sort"]:checked')?.value ||
                "asc";

            const rows = Array.from(
                document.querySelectorAll("#bodyKunjungan tr")
            );

            // Filter tanggal
            rows.forEach((row) => {
                const tanggal = row.cells[1].textContent.trim();
                let show = true;

                if (tanggalAwal && tanggal < tanggalAwal) show = false;
                if (tanggalAkhir && tanggal > tanggalAkhir) show = false;

                row.style.display = show ? "" : "none";
            });

            // Sorting
            const visibleRows = rows.filter(
                (row) => row.style.display !== "none"
            );
            visibleRows.sort((a, b) => {
                const namaA = a.cells[0].textContent.trim().toLowerCase();
                const namaB = b.cells[0].textContent.trim().toLowerCase();
                return sortOrder === "asc"
                    ? namaA.localeCompare(namaB)
                    : namaB.localeCompare(namaA);
            });

            // Masukkan kembali ke tbody
            const tbody = document.getElementById("#bodyKunjungan");
            visibleRows.forEach((row) => tbody.appendChild(row));
        });

    $('#filterForm button:contains("Hapus")').on("click", function () {
        $("#tanggalAwal").val("");
        $("#tanggalAkhir").val("");
        $('input[name="sort"]').prop("checked", false);

        $.fn.dataTable.ext.search = [];
        visitorTable.order([]).draw();
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
            "text-sm"
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
                "duration-200"
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
                "border",
                "border-gray-300",
                "rounded-md",
                "py-1.5",
                "px-3",
                "text-sm",
                "text-green-700",
                "focus:outline-none",
                "focus:ring-2",
                "focus:ring-emerald-500"
            );
        }
    }, 0);
}

function toggleFilter() {
    const notification = document.getElementById("filterDropdown");
    notification.classList.toggle("hidden");
}

function showResetModal() {
    document.getElementById("resetModal").classList.remove("hidden");
}

function hideResetModal() {
    document.getElementById("resetModal").classList.add("hidden");
}
