export function showModal({ title, message, type, onConfirm = null }) {
    const modal = document.getElementById("universalModal");
    const titleEl = document.getElementById("modalTitle");
    const messageEl = document.getElementById("modalMessage");
    const buttonsEl = document.getElementById("modalButtons");

    titleEl.textContent = title;
    messageEl.textContent = message;
    buttonsEl.innerHTML = "";

    if (type === "confirm") {
        const cancelBtn = document.createElement("button");
        cancelBtn.textContent = "Batal";
        cancelBtn.className = "px-4 py-2 bg-gray-200 rounded";
        cancelBtn.onclick = () => modal.classList.add("hidden");

        const okBtn = document.createElement("button");
        okBtn.textContent = "Ya, Lanjutkan";
        okBtn.className = "px-4 py-2 bg-red-600 text-white rounded";
        okBtn.onclick = () => {
            modal.classList.add("hidden");
            if (onConfirm) onConfirm();
        };

        buttonsEl.appendChild(cancelBtn);
        buttonsEl.appendChild(okBtn);
    } else {
        const closeBtn = document.createElement("button");
        closeBtn.textContent = "OK";
        closeBtn.className = "px-4 py-2 bg-green-600 text-white rounded";
        closeBtn.onclick = () => modal.classList.add("hidden");

        buttonsEl.appendChild(closeBtn);
    }

    modal.classList.remove("hidden");
}