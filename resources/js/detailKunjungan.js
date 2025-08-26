document.addEventListener("DOMContentLoaded", function () {
    /* Memunculkan loading */
    document.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function (e) {
            if (link.getAttribute("href") && link.getAttribute("href").charAt(0) !== "#") {
                document.getElementById("loadingOverlay").classList.remove("hidden");
            }
        })
    })

    /* Memunculkan modal yakin */
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.selesai-kunjungan');
        if (!btn) return;
        e.preventDefault();

        openModal({
            variant: 'warning',
            titleText: 'Peringatan',
            messageText: 'Apakah Anda yakin data sudah benar? Silakan periksa kembali sebelum disimpan.',
            show: ['yakin', 'warnYellow'],
            onYakin: () => {
                document.getElementById("formSelesai").submit();
            }
        });
    });

    const btnWarnYellow = document.getElementById("btnWarnYellow");
    if (btnWarnYellow) {
        btnWarnYellow.addEventListener("click", function () {
            closeModal();
        });
    }
    
});