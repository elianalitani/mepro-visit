<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
    <main>
        <!--begin::Header-->
        <div class="grid grid-cols-3 p-4 items-center bg-white">
            <a href="/satpam" class="flex justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#029c55" class="size-5">
                    <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                </svg>
            </a>
            <div class="flex justify-center text-lg font-bold">
                Notifikasi
            </div>
        </div>
        <!--end::Header-->
        
        <!--begin::Notifikasi-->
        <!--begin::Contoh berlangsung-->
        <div class="flex gap-4 p-4 m-4 items-center justify-center bg-white rounded-xl shadow-sm">
            <div class="p-2 border-2 border-[#3171DA] rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3171DA" class="size-5">
                    <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                </svg>
            </div>
            <!--begin::Detail kunjungan-->
            <div class="flex-1">
                <div class="flex justify-between items-start">
                    <span class="text-sm font-bold">Kunjungan sedang berlangsung</span>
                    <span class="text-gray-400 text-xs">1 min ago</span>
                </div>
                <div class="text-sm text-gray-500 font-light">Maitsa Luthfiyyah - Telkom University</div>
            </div>
            <!--end::Detail kunjungan-->
        </div>
        <!--end::Contoh berlangsung-->
        
        <!--begin::Contoh dibatalkan-->
        <div class="flex gap-4 p-4 m-4 items-center justify-center bg-white rounded-xl shadow-sm">
            <div class="p-2 border-2 border-[#e21b1b] rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#e21b1b" class="size-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                </svg>
            </div>
            <!--begin::Detail kunjungan-->
            <div class="flex-1">
                <div class="flex justify-between items-start">
                    <span class="text-sm font-bold">Kunjungan dibatalkan</span>
                    <span class="text-gray-400 text-xs">1 min ago</span>
                </div>
                <div class="text-sm text-gray-500 font-light">Maitsa Luthfiyyah - Telkom University</div>
            </div>
            <!--end::Detail kunjungan-->
        </div>
        <!--end::Contoh dibatalkan-->
        
        <!--end::Notifikasi-->
    </main>
</body>
</html>