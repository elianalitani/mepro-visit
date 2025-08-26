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
    const btn = e.target.closest('#batal-kunjungan');
    if (!btn) return;
    e.preventDefault();

    openModal({
        variant: 'warning', // atau 'danger'
        titleText: 'Batalkan Kunjungan?',
        messageText: 'Tindakan ini akan membatalkan kunjungan. Lanjutkan?',
        show: ['yakin','warnYellow', 'success'],
        onYakin: () => {
            closeModal();
        }
    });
});