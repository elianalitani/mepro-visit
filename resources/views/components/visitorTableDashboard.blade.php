<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
</head>
<div class="h-fit w-full gap-3 p-2 sm:p-4 mt-10 overflow-auto bg-white rounded-xl shadow-sm">
    <!--begin::Header-->    
    <div class="flex flex-row p-4 justify-between">
        <span class="text-sm sm:text-2xl font-bold">Kunjungan Terakhir</span>
        <a href="{{ route('kunjungan.index') }}" class="text-sm text-blue-500 hover:underline">View all</a>
    </div>
    <!--end::Header-->
    <!--begin::Table-->
    <table id="tableKunjungan" class="table-auto w-full text-sm">
        <thead>
            <tr class="text-gray-500 text-center">
                <th>Nama Tamu</th>
                <th>Instansi</th>
                <th>Tanggal</th>
                <th>Waktu<br>Kedatangan</th>
                <th>Waktu<br>Kepulangan</th>
                <th>Pihak Tujuan</th>
                <th>Divisi</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
    <!--end::Table-->
</div>