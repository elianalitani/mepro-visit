<div id="main" class="h-fit min-h-[400px] gap-3 p-4 mt-10 overflow-auto bg-white rounded-xl shadow-sm transition-all duration-300">
<!--begin::Table-->
    <table id="tableKunjungan" class="table-auto w-full text-sm" data-url="{{ route('kunjungan.load') }}">
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
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
<!--end::Table-->
</div>