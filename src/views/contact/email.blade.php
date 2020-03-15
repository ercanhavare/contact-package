@component('mail::message')
# Introduction

{{--The body of your message.--}}
There is new query from {{$name}}
<br>
Message:
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
