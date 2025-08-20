<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mepro Visit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white sm:bg-gradient-to-r sm:from-[#029C55] sm:to-[#34C88AB2] min-h-screen w-full overflow-hidden">
    <div class="main-container grid grid-cols-1 md:grid-cols-2 gap-4 mx-4 md:mx-10">
        <!--begin::Kontainer kiri-->
        <div class="container flex flex-col gap-5 p-4 justify-center items-center sm:items-start">
            <img src="{{ asset('assets/images/logo-white.png') }}" alt="Logo MeproVisit" class="w-24 md:w-30 h-auto hidden sm:block">
            <div class="text-3xl sm:text-5xl text-white font-medium hidden sm:block">Hey, Hello!</div>
            <div class="text-lg md:text-md text-white font-regular hidden sm:block">Monitor visitor flow with ease. Seamless check in, better control.</div>
            <!-- <div class="text-[#ffffff90] font-light hidden sm:block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> -->
        </div>
        <!--end::Kontainer kiri-->
        
        <!--begin::Kontainer kanan-->
        <div class="container md:h-screen flex flex-col justify-end items-center text-center">
        <img src="{{ asset('assets/images/logo-green.png') }}" alt="Logo MeproVisit" class="w-32 md:w-30 h-auto mt-auto justify-center items-center block sm:hidden">
            <div class="flex flex-col p-16 sm:w-100 h-120 w-full max-w-md mx-auto bg-white rounded-t-3xl">
                <p class="text-lg font-bold hidden sm:block">Welcome Back!</p>
                <p class="mb-8 text-left text-md sm:text-lg font-bold block sm:hidden">Log in to your account</p>
                <p class="mb-10 text-sm color-[#00000050] hidden sm:block">Let's get started with your account</p>

                <!--begin::Form login-->
                <form method="POST" action="/login">
                    @csrf
                    <!--begin::Username-->
                    <div class="relative mb-5">
                        <input
                            type="text"
                            id="username"
                            name="username"
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
                            name="password"
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
                    <!--begin::Button login-->
                    <button type="submit" class="text-white bg-[#029C55] px-10 py-2 w-50 rounded-full items-center">
                        Login
                    </button>
                    <div class="mt-2 text-sm text-[#E21B1B] font-semibold">
                        @if ($errors->has('login'))
                            <p>{{ $errors->first('login') }}</p>
                        @endif
                    </div>
                    <!--end::Button login-->
                </form>
                <!--end::Form login-->
            </div>
        </div>
        <!--end::Kontainer kanan-->
    </div>
    
<script>

</script>
</body>
</html>