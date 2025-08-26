<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3faf7; 
        }
        .card {
            border-radius: 15px;
            border: none;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            height: 40px;
        }
        .btn-success {
            background-color: #00a651;
            border: none;
            font-weight: 500;
            padding: 10px;
            border-radius: 8px;
        }
        .btn-success:hover {
            background-color: #009148;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-5">
        <div class="card shadow p-4">
            <div class="logo">
                <img src="{{ asset('assets/images/logo-green.png') }}" alt="Logo"> 
                <h5 class="mt-3 fw-bold">Reset your password</h5>
            </div>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email ?? old('email') }}">
                <!-- Password Baru -->
                <div class="mb-3">
                    <label class="form-label">Password Baru</label>
                    <input type="password" name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Masukkan password baru" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Ulangi password baru" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Reset Password</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
