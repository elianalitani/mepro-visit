(function () {
    const modal = document.getElementById('modalMain');
    const icon = document.getElementById('modalMainIcon');
    const title = document.getElementById('modalMainTitle');
    const message = document.getElementById('modalMainMessage');

    const btnYakin = document.getElementById('btnYakin');
    const btnSuccess = document.getElementById('btnSuccess');
    const btnWarnY = document.getElementById('btnWarningYellow');
    const btnWarnR = document.getElementById('btnWarningRed');

    const modalLoad = document.getElementById('modalLoad');

    const VARIANT_COLOR = {
        info: 'text-gray-500',
        success: 'text-[#029C55]',
        warning: 'text-[#FDE047]',
        danger: 'text-[#E21B1B]'
    };

    function resetButtons() {
        [btnYakin, btnSuccess, btnWarnY, btnWarnR].forEach(b => {
            b.classList.add('hidden');

            const clone = b.cloneNode(true);
            b.replaceWith(clone);
        });
    }

    function setIconColor(variant) {
        icon.classList.remove(...Object.values(VARIANT_COLOR));
        icon.classList.add(VARIANT_COLOR[variant] | VARIANT_COLOR.info);
    }

    window.openModal = function ({
        variant = 'info',
        titleText = 'Judul Modal',
        messageText = 'Pesan modal',
        show = [],
        onYakin = null,
        onSuccess = null,
        onWarnYellow = null,
        onWarnRed = null,
    } = {}) {
        setIconColor(variant);
        title.textContent = titleText;
        message.textContent = messageText;

        resetButtons();

        show.forEach(key => {
            if (key === 'yakin') {
                const b = document.getElementById('btnYakin');
                b.classList.remove('hidden');
                if (onYakin) b.addEventListener('click', onYakin);
            }

            if (key === 'success') {
                const b = document.getElementById('btnSuccess');
                b.classList.remove('hidden');
                if (onSuccess) b.addEventListener('click', onSuccess);
            }

            if (key === 'warnYellow') {
                const b = document.getElementById('btnWarnYellow');
                b.classList.remove('hidden');
                if (onWarnYellow) b.addEventListener('click', onWarnYellow);
            }

            if (key === 'warnRed') {
                const b = document.getElementById('btnWarnRed');
                b.classList.remove('hidden');
                if (onWarnRed) b.addEventListener('click', onWarnRed);
            }
        });

        document.getElementById('btnSuccess').addEventListener('click', closeModal);

        modal.classList.remove('hidden');
    };

    window.closeModal = function () {
        modal.classList.add('hidden');
    };

    window.showLoadModal = function (titleText = 'Menyimpan Data...', messageText = 'Mohon tunggu sebentar...') {
        document.getElementById('modalLoadTitle').textContent = titleText;
        document.getElementById('modalLoadMessage').textContent = messageText;
        modalLoad.classList.remove('hidden');
    };

    window.hideLoadModal = function () {
        modalLoad.classList.add('hidden');
    };

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
})();