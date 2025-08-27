<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-md">
    <div class="bg-white shadow-lg rounded-2xl p-6">
      
      <!-- Logo -->
      <div class="text-center mb-6">
        <img src="{{ asset('assets/images/logo-green.png') }}" alt="Logo" class="h-10 mx-auto">
        <h5 class="mt-3 font-bold text-gray-800 text-lg">Reset your password</h5>
      </div>

      <!-- Alert -->
      @if (session('status'))
        <div class="bg-green-100 border border-green-300 text-green-700 text-sm rounded-lg px-4 py-2 mb-4">
          {{ session('status') }}
        </div>
      @endif

      <!-- Form -->
      <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email ?? old('email') }}">
        <!--begin::Password-->
        <div class="mb-5 w-full">
        <label for="password" class="block mb-2 text-sm text-gray-900 font-medium">
            Password <span class="text-xs text-[#e21b1b]">*</span>
        </label>
        <div class="relative">
            <input id="password" name="password" type="password"
            class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900"
            placeholder="Password minimal 8 karakter" required>
            <button type="button" class="toggle-password absolute inset-y-0 right-0 flex items-center px-3 text-gray-400">
            <!-- Eye Icon -->
            <svg class="icon-eye w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path
                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
            <!-- Eye Off Icon -->
            <svg class="icon-eye-off hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path
                d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a20.6 20.6 0 0 1 4.23-5.94M9.88 9.88A3 3 0 0 0 12 15a3 3 0 0 0 2.12-5.12" />
                <line x1="1" y1="1" x2="23" y2="23" />
            </svg>
            </button>
        </div>
        </div>
        <!--end::Password-->

        <!--begin::Konfirmasi Password-->
        <div class="mb-5 w-full">
        <label for="password_confirmation" class="block mb-2 text-sm text-gray-900 font-medium">
            Konfirmasi Password <span class="text-xs text-[#e21b1b]">*</span>
        </label>
        <div class="relative">
            <input id="password_confirmation" name="password_confirmation" type="password"
            class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900"
            placeholder="Ulangi password baru" required>
            <button type="button" class="toggle-password absolute inset-y-0 right-0 flex items-center px-3 text-gray-400">
            <!-- Eye Icon -->
            <svg class="icon-eye w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path
                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
            <!-- Eye Off Icon -->
            <svg class="icon-eye-off hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path
                d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a20.6 20.6 0 0 1 4.23-5.94M9.88 9.88A3 3 0 0 0 12 15a3 3 0 0 0 2.12-5.12" />
                <line x1="1" y1="1" x2="23" y2="23" />
            </svg>
            </button>
        </div>
        </div>
        <!--end::Konfirmasi Password-->


        <!-- Submit -->
        <button type="submit" 
                class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2.5 rounded-lg transition">
          Reset Password
        </button>
      </form>
    </div>
  </div>

</body>
</html>

<script>
  document.querySelectorAll(".toggle-password").forEach(btn => {
    btn.addEventListener("click", () => {
      const input = btn.parentElement.querySelector("input");
      const eye = btn.querySelector(".icon-eye");
      const eyeOff = btn.querySelector(".icon-eye-off");

      if (input.type === "password") {
        input.type = "text";
        eye.classList.add("hidden");
        eyeOff.classList.remove("hidden");
      } else {
        input.type = "password";
        eye.classList.remove("hidden");
        eyeOff.classList.add("hidden");
      }
    });
  });
</script>
