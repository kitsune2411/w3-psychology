@component('mail::message')
# {{ $details['title'] }}

You are receiving this email because we received a password reset request for your account.

@component('mail::button', ['url' => $details['url']])
Reset Password
@endcomponent

This reset password link will be expire in 60 minutes.

If you did not request a password reset, no further action is required.

Regards,<br>
{{ config('app.name') }}
@endcomponent
