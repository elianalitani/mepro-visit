<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen">
    <!--begin::Header-->
    <div class="bg-white p-3 max-w-screen grid grid-cols-3 gap-5 items-center">    
        <div class="font-bold text-lg">Dashboard</div>
        
        <!--begin::Search bar-->
        <div class="">
            <div class="flex flex-row items-center bg-[#F5F5F5] px-4 py-2 rounded-full w-80 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="text" id="searchKunjungan" placeholder="Cari di sini..." class="border border-[#f5f5f5]"/>
            </div>
        </div>
        <!--end::Search bar-->
        
        <!--begin::Account-->
        <div class="grid grid-cols-3 items-center gap-2 relative">
            <!--begin::Notification-->
            <div class="flex flex-col items-end">
                <div class="rounded-sm bg-gray-100 p-2 w-fit">
                    <button id="notifButton" onclick="toggleNotif()" class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </button>
                </div>
            </div>
            <!--end::Notification-->
            
            @include('components.notifications')
            
            <!--begin::Profile picture-->
            <div class="flex flex-col items-end">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>
            </div>
            <!--end::Profile picture-->
            
            <div class="flex flex-col items-start">
                <span class="font-bold text-xs">Admin MeproVisit</span>
                <span class="text-xs">admin@email.com</span>
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