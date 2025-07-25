<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#E8F5EC]">
    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main class="p-4 gap-4">
                <div class="w-full max-w-screen-xl mx-auto">
                    <!--begin::Overview-->
                    <div class="flex flex-col m-3">
                        <span class="text-xl font-bold">Overview</span>
                    </div>
                    <div class="flex flex-row gap-3 justify-between">
                        <!--begin::Kunjungan selesai-->
                        <div class="flex flex-col gap-2 w-64 p-5 bg-white rounded-lg justify-around shadow-sm">
                            <div class="flex flex-row gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#59d257" class="bg-[#e8fbe8] rounded-full p-1 size-8">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-md text-gray-500 font-bold">Kunjungan Selesai</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold">50</span>
                                <span class="text-sm bg-[#eefbe8] rounded-full p-1 text-[#59d257]">
                                    <span class="font-bold">+2</span>
                                    <span>dari hari kemarin</span>
                            </div>
                        </div>
                        <!--end::Kunjungan selesai-->
                        <!--begin::Kunjungan menunggu-->
                        <div class="flex flex-col gap-2 w-64 p-5 bg-white rounded-lg justify-around shadow-sm">
                            <div class="flex flex-row gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fad230" class="bg-[#fbfbe8] rounded-full p-1 size-8">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-md text-gray-500 font-bold">Menunggu</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold">50</span>
                                <span class="text-sm bg-[#fbfbe8] rounded-full p-1 text-[#fad230]">
                                    <span class="font-bold">+2</span>
                                    <span>dari hari kemarin</span>
                            </div>
                        </div>
                        <!--end::Kunjungan menunggu-->
                        <!--begin::Kunjungan sedang berlangsung-->
                        <div class="flex flex-col gap-2 w-64 p-5 bg-white rounded-lg justify-around shadow-sm">
                            <div class="flex flex-row gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3171da" class="bg-[#e9e8fb] rounded-full p-1 size-8">
                                    <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-md text-gray-500 font-bold">Sedang Berlangsung</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold">50</span>
                                <span class="text-sm bg-[#e9e8fb] rounded-full p-1 text-[#3171da]">
                                    <span class="font-bold">+2</span>
                                    <span>dari hari kemarin</span>
                            </div>
                        </div>
                        <!--end::Kunjungan sedang berlangsung-->
                        <!--begin::Kunjungan dibatalkan-->
                        <div class="flex flex-col gap-2 w-64 p-5 bg-white rounded-lg justify-around shadow-sm">
                            <div class="flex flex-row gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#e21b1b" class="bg-[#fbe8e8] rounded-full p-1 size-8">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-md text-gray-500 font-bold">Dibatalkan</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold">50</span>
                                <span class="text-sm bg-[#fbe8e8] rounded-full p-1 text-[#e21b1b]">
                                    <span class="font-bold">+2</span>
                                    <span>dari hari kemarin</span>
                            </div>
                        </div>
                        <!--end::Kunjungan dibatalkan-->
                    </div>
                    <!--end::Overview-->
                    
                    <!--begin::Grafik-->
                    <div class="flex flex-row justify-between">
                        <div class="bg-white rounded-lg gap-3 mt-10 overflow-auto shadow-sm">
                            <!--begin::Header-->    
                            <div class="flex flex-row justify-between items-center p-4">
                                <span class="text-md font-bold">Kunjungan PT Meprofarm Pharmaceutical Industries | </span>
                                <select>
                                    <option selected>Tahun</option>
                                    <option>2025</option>
                                    <option>2024</option>
                                </select>
                            </div>
                            <!--end::Header--> 
                        </div>
                        <!---->
                        <div class="bg-white rounded-lg gap-3 mt-10 overflow-auto shadow-sm">
                            <!--begin::Header-->    
                            <div class="flex flex-row justify-between items-center p-4">
                                <span class="text-md font-bold">Top 10 Kunjungan</span>
                            </div>
                            <!--end::Header--> 
                            <!--begin::Table-->
                            <table class="table-auto w-full p-4">
                                <thead>
                                    <tr class="text-gray-500 text-center">
                                        <th>Rank</th>
                                        <th>Instansi</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody clas="text-left">
                                    <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                        <td class="px-4 py-3">#1</td>
                                        <td class="px-4 py-3">PT Telkom Indonesia</td>
                                        <td class="px-4 py-3">50</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                        <td class="px-4 py-3">#1</td>
                                        <td class="px-4 py-3">PT Telkom Indonesia</td>
                                        <td class="px-4 py-3">50</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Grafik-->
                    
                    <!--begin::Tabel kunjungan-->
                    <div class="bg-white rounded-lg gap-3 mt-10 overflow-auto shadow-sm">
                        <!--begin::Header-->    
                        <div class="flex flex-row justify-between items-center p-4">
                            <span class="text-2xl font-bold">Kunjungan Terakhir</span>
                            <a class="text-sm text-blue-500 hover:underline" href="#">View all</a>
                        </div>
                        <!--end::Header-->
                        <!--begin::Table-->
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="text-gray-500 text-center">
                                    <th>Nama Tamu</th>
                                    <th>Instansi</th>
                                    <th>Tanggal</th>
                                    <th>Pihak Tujuan</th>
                                    <th>Divisi</th>
                                    <th>Status<th>
                                </tr>
                            </thead>
                            <tbody clas="text-left">
                                <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                    <td class="px-4 py-3">Maitsa Luthfiyyah</td>
                                    <td class="px-4 py-3">Telkom University</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Ian Mariana Wati</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">Menunggu</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                    <td class="px-4 py-3">Maitsa Luthfiyyah</td>
                                    <td class="px-4 py-3">Telkom University</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Ian Mariana Wati</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">Menunggu</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                    <td class="px-4 py-3">Maitsa Luthfiyyah</td>
                                    <td class="px-4 py-3">Telkom University</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Ian Mariana Wati</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">Menunggu</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                    <td class="px-4 py-3">Maitsa Luthfiyyah</td>
                                    <td class="px-4 py-3">Telkom University</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Ian Mariana Wati</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">Menunggu</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                    <td class="px-4 py-3">Maitsa Luthfiyyah</td>
                                    <td class="px-4 py-3">Telkom University</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Ian Mariana Wati</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">Menunggu</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-[#E8F5EC] border-b border-[#029C558C]">
                                    <td class="px-4 py-3">Maitsa Luthfiyyah</td>
                                    <td class="px-4 py-3">Telkom University</td>
                                    <td class="px-4 py-3">08/07/2025</td>
                                    <td class="px-4 py-3">Ian Mariana Wati</td>
                                    <td class="px-4 py-3">MIS</td>
                                    <td class="px-4 py-3">Menunggu</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Tabel kunjungan-->
                </div>
            </main>
        </div>
    </div>
    
<script>
    const sidebar = document.getElementById("drawer-sidebar"); // sidebar utama
    const sidebarClose = document.getElementById("drawer-sidebar-close") // sidebar yang muncul ketika sidebar utama ditutup
    const mainContent = document.getElementById("main-content"); // isi sidebar
    const toggleButton = document.getElementById("toggle-sidebar"); // icon hamburger, untuk membuka sidebar
    const closeSidebarBtn = document.getElementById("close-sidebar"); // logo, untuk menutup sidebar

    // Untuk membuka sidebar
    toggleButton.addEventListener("click", () => {
        sidebar.classList.remove("hidden");
        sidebar.classList.remove("-translate-x-full");
        sidebarClose.classList.add("hidden");
        sidebarClose.classList.add("translate-x-full");
    });

    // Untuk menutup sidebar
    closeSidebarBtn.addEventListener("click", () => {
        sidebar.classList.add("-translate-x-full");
        sidebar.classList.add("hidden")
        sidebarClose.classList.remove("hidden")
        sidebarClose.classList.remove("translate-x-full");
    });
</script>

</body>
</html>