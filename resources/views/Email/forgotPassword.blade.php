@component('mail::message')

<h1> Hello {{ $mailData['name'] }} </h1>
Your OTP for your query is {{ $mailData['otp'] }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent