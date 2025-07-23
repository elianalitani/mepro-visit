<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-600">Tailwind is working!</h1>
        <p class="mt-4 text-lg text-gray-700">If you see this styled properly, Tailwind is active 🎉</p>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-14 bg-linear-to-r from-[#029C55] to-[#34C88AB2]">
    <div class="grid grid-cols-2 gap-4">
        <div class="p-4 flex items-center">
            <h1>Hey, Hello!</h1>
            <p>Monitor visitor flow with ease. Seamless check in, better control.</p>
        </div>
        <div class="p-4">
            <div>
                <h1>Welcome Back!</h1>
                <p>Let's get started with your account</p>
                <form>
                    <div class="mb-5">
                        <input type="text" id="username" class="" placeholder="Username" required />
                    </div>
                    <div class="mb-5">
                        <input type="password" id="password" class="" placeholder="Password" required />
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input type="checkbox" id="logged-in" class="" required />
                        </div>
                        <label>Keep me logged in?</label>
                    </div>
                    <button type="submit" class="text-white bg-[#029C55]">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
