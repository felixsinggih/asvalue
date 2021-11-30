@component('mail::message')
# Reset Password

Kode verifikasi untuk perubahan data adalah :

# {{ $data['token'] }}

Abaikan pesan ini, jika bukan anda.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
