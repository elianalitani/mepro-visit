(function () {
    const resetModal = document.getElementById("resetModal");

    window.showResetModal = function (options = {}) {
        resetModal.classList.remove("hidden");

        const btnResetSimpan = document.getElementById("btnResetSimpan");
        if (btnResetSimpan) {
            btnResetSimpan.onclick = (e) => {
                e.preventDefault();
                if (options.onConfirm) options.onConfirm();
            };
        }

        const btnResetBatal = document.getElementById("btnResetBatal");
        if (btnResetBatal) {
            btnResetBatal.onclick = () => hideResetModal();
        }
    };

    window.hideResetModal = function () {
        resetModal.classList.add("hidden");
    };
})();
