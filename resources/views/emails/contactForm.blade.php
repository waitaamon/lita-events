@component('mail::message')
# Website Message

{{$name}}<br>

{{$phone}} | {{ $email }}

{{$message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
