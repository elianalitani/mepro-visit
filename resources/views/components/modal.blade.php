<!-- Modal -->
<div id="modalMain" class="fixed inset-0 z-50 flex justify-center items-center bg-black/50">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        
        <div id="modalMainIcon" class="flex m-4 justify-center items-center">
            <!--SVG-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-24">
                <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
            </svg>
        </div>
        <h2 id="modalMainTitle" class="mb-2 text-2xl text-gray-800 text-center font-bold">Judul Modal</h2>
        <p id="modalMainMessage" class="mb-4 text-lg text-gray-600 text-center">Pesan modal akan tampil di sini</p>
        <div class="flex justify-center gap-2" id="modalButtons">
            <!--begin::Button yakin-->
            <button id="btnYakin" class="flex w-[100px] gap-2 p-2.5 px-5 justify-center items-center bg-[#D9D9D9] rounded-lg font-bold hidden">
                Yakin
            </button>
            <!--end::Button yakin-->
            
            <!--begin::Button success-->
            <button id="btnSuccess" class="flex w-[100px] gap-2 p-2.5 px-5 justify-center items-center bg-[#029C55] rounded-lg text-white font-bold hidden">
                Kembali
            </button>
            <!--end::Button success-->
            
            <!--begin::Button warning yellow-->
            <button id="btnWarningYellow" class="flex w-[100px] gap-2 p-2.5 px-5 justify-center items-center bg-[#FDE047] rounded-lg font-bold hidden">
                Batalkan
            </button>
            <!--end::Button warning yellow-->
            
            <!--begin::Button warning red-->
            <button id="btnWarningRed" class="flex w-[100px] gap-2 p-2.5 px-5 justify-center items-center bg-[#E21B1B] rounded-lg text-white font-bold hidden">
                Batalkan
            </button>
            <!--end::Button warning red-->
        </div>
    </div>
</div>

<div id="modalLoading" class="fixed inset-0 z-50 flex justify-center items-center bg-black/50 hidden">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        
        <div id="modalLoadIcon" class="flex space-x-2 p-6 justify-center items-center bg-white">
            <div class='h-4 w-4 bg-[#209c55] rounded-full animate-bounce [animation-delay:-0.45s]'></div>
            <div class='h-4 w-4 bg-[#209c55] rounded-full animate-bounce [animation-delay:-0.3s]'></div>
            <div class='h-4 w-4 bg-[#209c55] rounded-full animate-bounce [animation-delay:-0.15s]'></div>
        </div>
        <h2 id="modalLoadTitle" class="mb-2 text-2xl text-gray-800 text-center font-bold">Menyimpan Data...</h2>
        <p id="modalLoadMessage" class="mb-4 text-lg text-gray-600 text-center">Mohon tunggu sebentar, sistem sedang menyimpan data Anda.</p>
    </div>
</div>