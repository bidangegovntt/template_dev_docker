@component('mail::message')
{{ __('Silahkan reset password Anda dengan klik tombol di bawah ini') }}

@component('mail::button', ['url' => route('home-reset-password', ['token' => $token])])
{{ __('Reset Password') }}
@endcomponent

@endcomponent
