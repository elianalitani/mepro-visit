<div class="absolute top-full right-0 w-80 hidden z-20 shadow-md" id="notifDropdown">
    <!--begin::Header-->
    <div class="w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[10px] border-b-green-600 mx-auto -mt-2"></div>
    <div class="bg-[#029C55] p-1 text-white font-bold text-center">    
        Notifikasi
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="bg-white items-center max-h-64 overflow-y-auto">     
        @forelse($notifikasi as $item)
            <a href="{{ route('kunjungan.lihatKunjungan', $item->kunjungan->id_kunjungan) }}" 
            class="block flex flex-col gap-3 p-4 border border-[#2d2d2b25] 
                    {{ $item->dibaca ? 'bg-white' : 'bg-[#B9E4D0]' }} 
                    hover:bg-gray-100 transition">
                
                <div class="flex flex-row gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="{{ $item->icon['fill'] }}" 
                        class="rounded-full p-1 size-6" 
                        style="background-color: {{ $item->icon['bg'] }}">
                        {!! $item->icon['svg'] !!}
                    </svg>
                    <span class="text-sm text-gray-500 font-bold">
                        {{ $item->kunjungan->status ?? '-' }}
                    </span>
                </div>
                
                <div class="flex flex-col text-sm justify-between">
                    <span class="font-bold">
                        {{ $item->kunjungan->nama_tamu ?? 'Nama tidak ada' }} - 
                        {{ $item->kunjungan->instansi ?? 'Instansi tidak ada' }}
                    </span>
                    <span>Tujuan : {{ $item->kunjungan->karyawan->nama ?? '-' }}</span>
                    <span>Divisi : {{ $item->kunjungan->karyawan->divisi->nama_divisi ?? '-' }}</span>
                </div>
            </a>
        @empty
            <div class="p-4 text-center text-gray-500 text-sm">
                Tidak ada notifikasi
            </div>
        @endforelse
    </div>
    <!--end::Content-->

</div>
