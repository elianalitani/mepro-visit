<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
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
                    
                    <!--begin::Grafik dan top kunjungan-->
                    <div class="flex flex-row gap-3">
                        <!--begin::Grafik-->
                        <div class="flex-[2] min-w-0 bg-white rounded-xl mt-10 w-full overflow-auto shadow-sm p-4">
                            <!--begin::Header-->    
                            <div class="flex flex-row justify-between p-4">
                                <span class="text-md font-bold">Kunjungan PT Meprofarm Pharmaceutical Industries | <span>2024</span></span>

                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownTahun" class="flex bg-[#eefbe8] rounded-full px-3 justify-center items-center" type="button">
                                    Tahun    
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>

                                <!--begin::Dropdown menu -->
                                <div id="dropdownTahun" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                    <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a class="block px-4 py-2 hover:bg-[#eefbe8]">2025</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-2 hover:bg-[#eefbe8]">2024</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-2 hover:bg-[#eefbe8]">2023</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Dropdown menu-->
                            </div>
                            <!--end::Header-->
                            <div class="w-full h-[300px]">
                                <canvas id="myChart" class="w-full h-full"></canvas>
                            </div>
                        </div>
                        <!--end::Grafik-->
                        
                        <!--begin::Top kunjungan-->
                        <div class="flex-[1] min-w-0 h-fit bg-white rounded-xl mt-10 w-full overflow-hidden shadow-sm p-4">
                            <!--begin::Header-->    
                            <div class="flex flex-row justify-between p-4">
                                <span class="text-md font-bold">Top 10 Kunjungan</span>
                            </div>
                            <!--end::Header--> 
                            <!--begin::Table-->
                            <table class="table-auto w-full">
                                <thead>
                                    <tr class="text-gray-500 text-center border-b border-[#029C5525]">
                                        <th>Rank</th>
                                        <th>Instansi</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody clas="text-left">
                                    <tr class="bg-white">
                                        <td class="px-4 py-3 text-center">#1</td>
                                        <td class="px-4 py-3">PT Telkom Indonesia</td>
                                        <td class="px-4 py-3 text-center">50</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="px-4 py-3 text-center">#2</td>
                                        <td class="px-4 py-3">Universitas Katolik Parahyangan</td>
                                        <td class="px-4 py-3 text-center">40</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Grafik dan top kunjungan-->
                    
                    @include('components.visitorTable')
                </div>
            </main>
        </div>
    </div>
    
<script>
    $(document).ready(function () {
        // Inisialisasi DataTables
        var visitorTable = $('#tableKunjungan').DataTable({
            "aaSorting": [],
            "paging": false,
            "searching": false,
            "info": false,
            "ordering": false
        });

        // Hubungkan input pencarian ke DataTables
        $('#searchKunjungan').on('keyup', function () {
            visitorTable.search(this.value).draw();
        });
        
        // Graf kunjungan per tahun
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: 'Jumlah Kunjungan',
                    data: [55, 49, 44, 24, 15, 90, 25, 12, 42, 35, 11, 21],
                    backgroundColor: '#029C55',
                    borderRadius: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    title: { display: false }
                },
                scales: {
                    x: {
                        grid: { display: false }
                    },
                    y: {
                        beginAtZero: true,
                        grid: { display: false }
                    }
                }
            }
        }); 
        });
</script>

</body>
</html>