<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#E8F5EC]">
    <div id="layout" class="flex transition-all duration-300">
        @include('components.sidebar')

        <div id="main-content" class="flex flex-col flex-1 transition-all duration-300">
            @include('components.header')

            <main class="p-4">
                <!-- Konten dashboard -->
            </main>
        </div>
    </div>
    
    <script>
        const sidebar = document.getElementById("drawer-sidebar");
        const mainContent = document.getElementById("main-content");

        document.getElementById("toggleSidebar").addEventListener("click", () => {
            sidebar.classList.toggle("-ml-64");
            mainContent.classList.toggle("ml-0");
        });
    </script>

</body>
</html>