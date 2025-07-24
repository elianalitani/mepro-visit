<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-[#029C55] to-[#34C88AB2] min-h-screen w-full overflow-hidden">
    <div class="grid grid-cols-2 gap-4 mx-20">
        <!--begin::Kontainer kiri-->
        <div class="container p-4 flex flex-col items-start justify-center gap-5">
            <img src="{{ asset('assets/images/logo-white.png') }}" alt="Logo MeproVisit" class="w-30 h-auto">
            <div class="text-5xl text-white font-medium">Hey, Hello!</div>
            <div class="text-lg text-white font-regular">Monitor visitor flow with ease. Seamless check in, better control.</div>
            <div class="text-[#ffffff90] font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
        </div>
        <!--end::Kontainer kiri-->
        <!--begin::Kontainer kanan-->
        <div class="container h-screen flex flex-col justify-end items-center text-center">
            <div class="bg-white flex flex-col rounded-t-3xl p-10 w-100 h-120">
                <p class="text-lg font-bold">Welcome Back!</p>
                <p class="mb-10 text-sm color-[#00000050]">Let's get started with your account</p>
                <!--begin::Form login-->
                <form>
                    <!--begin::Username-->
                    <div class="relative mb-5">
                        <input
                            type="text"
                            id="username"
                            placeholder="Username"
                            required
                            class="peer w-full px-4 py-2 border-1 border-gray-400 text-black placeholder-transparent rounded-full focus:outline-none focus:border-[#029C55]"
                        />
                        <label
                            for="username"
                            class="absolute left-4 top-2.5 bg-white px-1 text-sm text-[#029C55] scale-90 transition-all duration-200 ease-in-out
                            peer-placeholder-shown:top-2 peer-placeholder-shown:left-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:scale-90
                            peer-focus:top-2 peer-focus:left-4 peer-focus:text-base peer-focus:text-[#029C55] peer-focus:scale-90
                            peer-[&:not(:placeholder-shown)]:-top-2 peer-[&:not(:placeholder-shown)]:text-sm peer-[&:not(:placeholder-shown)]:text-[#029C55] peer-[&:not(:placeholder-shown)]:scale-90">
                            Username
                        </label>
                    </div>
                    <!--end::Username-->
                    <!--begin::Password-->
                    <div class="relative mb-5">
                        <input
                            type="password"
                            id="password"
                            placeholder="Password"
                            required
                            class="peer w-full px-4 py-2 border-1 border-gray-400 text-black placeholder-transparent rounded-full focus:outline-none focus:border-[#029C55]"
                        />
                        <label
                            for="password"
                            class="absolute left-4 top-2.5 bg-white px-1 text-sm text-[#029C55] scale-90 transition-all duration-200 ease-in-out
                            peer-placeholder-shown:top-2 peer-placeholder-shown:left-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:scale-90
                            peer-focus:top-2 peer-focus:left-4 peer-focus:text-base peer-focus:text-[#029C55] peer-focus:scale-90
                            peer-[&:not(:placeholder-shown)]:-top-2 peer-[&:not(:placeholder-shown)]:text-sm peer-[&:not(:placeholder-shown)]:text-[#029C55] peer-[&:not(:placeholder-shown)]:scale-90">
                            Password
                        </label>
                    </div>
                    <!--end::Password-->
                    <!--begin::Checkbox-->
                    <div class="flex items-center justify-center mb-5">
                        <input type="checkbox" id="logged-in" class="w-4 h-4 border-gray-300 rounded-none" required />
                        <label class="text-sm ml-3 text-[#00000070]">Keep me logged in</label>
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Button login-->
                    <a
                        type="submit"
                        class="text-white bg-[#029C55] px-10 py-2 w-50 rounded-full items-center"
                        href="/admin">
                        Login
                    </a>
                    <!--end::Button login-->
                </form>
                <!--end::Form login-->
            </div>
        </div>
        <!--end::Kontainer kanan-->
    </div>
</body>
</html>