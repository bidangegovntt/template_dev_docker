@component('mail::message')
{{ __('Anda memiliki notifikasi yang belum dibaca di website Lopo Inovasi, klik tombol di bawah ini untuk melihat notifikasi') }}

@component('mail::button', ['url' => route('notification')])
{{ __('Baca Notifikasi') }}
@endcomponent

{{ __('Terima Kasih.') }}

@endcomponent



{{-- <html>
<body>
<h2>Halo, {{ $notification_owner->name }}</h2>

<p>Anda memiliki notifikasi yang belum terbaca. Berikut ringkasannya</p>

<ol>
    <li>{{ "jenis notifikasi" }} ({{ $notification->unread_counter }} belum terbaca)</li>
</ol>

<p>Untuk notifikasi yang lebih lengkap bisa dilihat dengan mengklik <a href="{{ $notification_url }}" target="_blank">link ini</a></p>

<p>Terima kasih</p>

<p>
    <strong>Lopo Inovasi</strong>
    <br>
    <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
</p>
</body>
</html> --}}
