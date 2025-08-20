<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>
<body class="min-h-screen bg-[#E8F5EC] overflow-x-hidden">
    <!--begin::Loading-->
    <div id="loadingOverlay" class="hidden fixed inset-0 flex z-99 w-screen justify-center items-center">
        @include('components.loading')
    </div>
    <!--end::Loading-->
    <div id="layout" class="flex">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')

            <main class="p-4 gap-4 m-3">
                <div class="w-full max-w-screen-xl mx-auto">
                    <div class="flex flex-">
                        <!--begin::Overview-->
                        <div class="flex flex-col">
                            <span class="text-xl font-bold">Registrasi Akun</span>
                            <!--begin::Breadcrumbs-->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse]">
                                    <li class="inline-flex items-center">
                                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <a href="{{ route('akun.index') }}" class="inline-flex items-center text-sm text-[#029C55] underline font-medium hover:text-[#029c5550]">
                                                Daftar Akun
                                            </a>
                                        </div>  
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 20.247 6-16.5" />
                                            </svg>
                                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400 hover:text-[#029C55]">Registrasi Akun</span>
                                        </div>  
                                    </li>
                                </ol>
                            </nav>
                            <!--end::Breadcrumbs-->
                        </div>
                        <!--end::Overview-->
                </div>
                
                <!--begin::Form akun-->
                <form action="{{ route('akun.updateAkun', $akun->id_user) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2">
                    @csrf
                    @method('PUT')

                    <!-- Form kiri -->
                    <div class="flex flex-col h-full bg-white rounded-xl gap-4 mt-6 shadow-sm p-4">                       
                        <div class="flex md:flex-col border border-gray-300 rounded-lg p-2.5">
                            <div class="flex flex-row gap-2">
                                <div class="mb-5 w-full">
                                    <label for="namaKaryawan" class="block mb-2 text-sm font-medium text-gray-900">Nama Karyawan</label>
                                    <input type="text" id="namaKaryawan" value="{{$karyawan-> nama}}" disabled
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"/>
                                </div>
                                <div class="mb-5 w-full">
                                    <label for="divisi" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                                    <input type="text" id="divisi" value="{{$akun-> role}}" disabled
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"/>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="mb-5 w-full">
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username', $akun->username) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"/>
                            @error('username')
                                <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password lama -->
                        <div class="mb-5 w-full">
                            <label for="old_password" class="block mb-2 text-sm font-medium text-gray-900">Password Lama <span class="text-xs text-red-600">*</span></label>
                            <input type="password" name="old_password" id="old_password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"/>
                            @error('old_password')
                                <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password baru -->
                        <div class="mb-5 w-full">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"/>
                            @error('password')
                                <span class="text-xs text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Konfirmasi password -->
                        <div class="mb-5 w-full">
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"/>
                        </div>

                        <!-- Tombol -->
                        <div class="flex text-sm w-full justify-end items-end gap-2">
                            <button type="submit" class="p-2.5 px-7 rounded-lg bg-[#029C55] text-white">Simpan</button>
                            <a href="{{ route('akun.index') }}" class="p-2.5 px-7 rounded-lg bg-gray-50 border border-gray-300">Batal</a>
                        </div>
                    </div>
                </form>

                <!--end::Form akun-->
            </main>
        </div>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        document.querySelectorAll("a").forEach(function (link){
            link.addEventListener("click", function(e){
                if(link.getAttribute("href") && link.getAttribute("href").charAt(0) !== "#"){
                    document.getElementById("loadingOverlay").classList.remove("hidden");
                }
            })
        })
    });   
    
    document.querySelectorAll('[data-hs-toggle-password]').forEach(button => {
        const targetSelector = JSON.parse(button.getAttribute('data-hs-toggle-password')).target;
        const input = document.querySelector(targetSelector);

        button.addEventListener('click', () => {
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        
        button.querySelectorAll('.hs-password-active\\:hidden, .hs-password-active\\:block, .hs-confirmPassword-active\\:hidden, .hs-confirmPassword-active\\:block').forEach(el => {
            el.classList.toggle('hidden');
            el.classList.toggle('block');
        });
        });
    });
</script>



</body>
</html>