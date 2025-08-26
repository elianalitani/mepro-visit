@component('mail::message')
# Halo!

<img src="{{ $message->embed(public_path('assets/images/logo-green.png')) }}" alt="Logo" width="120">

Anda menerima email ini karena ada permintaan reset password.

@component('mail::button', ['url' => $actionUrl, 'color' => 'success'])
Reset Password
@endcomponent

Jika Anda tidak mengajukan permintaan reset password, abaikan email ini.

Terima kasih,<br>
PT Meprofarm Pharmaceutical Industries
@endcomponent
