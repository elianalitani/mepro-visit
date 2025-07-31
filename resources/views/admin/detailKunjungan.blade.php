<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main class="p-4 gap-4 m-3">
                <div class="w-full max-w-screen-xl mx-auto">
                    <div class="flex flex-">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Form Kunjungan</span>
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="/admin" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="/daftar-kunjungan" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                                Daftar Kunjungan
                                            </a>
                                        </div>  
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400 hover:text-[#029C55]">Detail Kunjungan</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>
                
                <!--begin::Form kunjungan-->
                <form class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-xl gap-4 mt-6 shadow-sm p-4">
                    <!--begin::Form kiri-->
                    <div class="flex flex-col h-full">
                        
                    </div>
                    <!--end::Form kiri-->
                            
                    <!--begin::Form kanan-->
                    <div class="flex flex-col h-full">
                        
                    </div>          
                    <!--end::Form kanan-->
                </form>
                <!--end::Form kunjungan-->
            </main>
        </div>
    </div>

<script>
</script>

</body>
</html>