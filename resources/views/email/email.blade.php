@component('mail::message')
# {{ $data['title'] . ', ' . $data['name'] }}

Silahkan verifikasi email anda dengan klik tombol berikut.

@component('mail::button', ['url' => $data['url']])
    Verifikasi Email Anda
@endcomponent

Jika anda merasa tidak membuat akun, abaikan pesan ini.

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
