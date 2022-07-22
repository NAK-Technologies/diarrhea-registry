@component('mail::message')
# Hello, {{ $user->name }}

Your account has been created.
{{-- 
@component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Kindly login to our application using the credentials below:
Username: {{ $user->email }}
Password: {{ $password }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
