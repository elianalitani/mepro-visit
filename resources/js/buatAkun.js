document.getElementById("btnBuatAkun").addEventListener("click", () => {
    openModal({
        variant: "info", 
        titleText: "Konfirmasi",
        messageText: "Apakah Anda yakin ingin membuat akun baru?",
        show: ["yakin", "success"],
        onYakin: () => {
           
            document.getElementById("formAkunBaru").submit();
        },
        onSuccess: () => {
            closeModal();
        },
    });
});
