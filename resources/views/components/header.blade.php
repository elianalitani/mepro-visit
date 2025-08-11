<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-full max-h-screen h-fit sm:min-h-screen">
    <!--begin::Header-->
    <div id="header" class="flex flex-row flex-wrap gap-2 sm:gap-4 p-3 w-full justify-center sm:justify-between items-center bg-white transition-all duration-300">    
        <div class="font-bold text-sm sm:text-base lg:text-lg hidden sm:block">Dashboard</div>
        
        <!--begin::Search bar-->
        <div class="flex-1 flex max-w-[150px] sm:max-w-none sm:w-auto justify-center order-1 sm:order-none">
            <div class="flex flex-row sm:max-w-md gap-2 px-3 py-1.5 sm:px-4 sm:py-2 w-full items-center bg-[#F5F5F5] rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="text" id="searchKunjungan" placeholder="Cari di sini..." class="w-full bg-transparent border border-[#f5f5f5] text-xs sm:text-sm focus:outline-none"/>
            </div>
        </div>
        <!--end::Search bar-->
        
        <!--begin::Notification-->
        @if(session('role') === 'Satpam' || session('role') === 'Resepsionis')
        <div class="relative flex gap-3 items-center order-2 sm:order-none shrink-0">
            <div class="relative p-1.5 bg-gray-100 rounded-sm">
                <button id="notifButton" onclick="toggleNotif()" class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 sm:size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                    
                    <span class="absolute -top-1 -right-1 px-1 bg-[#E21B1B] rounded-full text-xs text-white font-bold">1</span>
                </button>
                
                @include('components.notifications')
            </div>
        </div>
        @endif
        <!--end::Notification-->
        
        <!--begin::Account-->
        <div class="flex w-48 items-center gap-2 order-3 sm:order-none">
            <!--begin::Profile picture-->
            <div class="shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#908787" class="size-8 sm:size-10">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>
            </div>
            <!--end::Profile picture-->
            
            <div class="lg:flex flex-col min-w-0 max-w-[300px] leading-tight truncate hidden sm:block">
                <span class="font-bold text-xs">{{ Auth::user()->karyawan->nama ?? 'Nama tidak ditemukan'}}</span>
                <span class="text-xs">{{ Auth::user()->username }}</span>
            </div>
        </div>
        <!--end::Account-->
    </div>
    <!--end::Header-->
    
    <script>
    function toggleNotif(){
        const notification = document.getElementById('notifDropdown');
        notification.classList.toggle('hidden');
    }

    document.addEventListener('click', function (e) {
        const button = document.getElementById('notifButton');
        const dropdown = document.getElementById('notifDropdown');

        if (!button.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>
</body>
</html>