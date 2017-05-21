@component('mail::message')
# Introduction

{{$msg->name}}
{{$msg->email}}
{{$msg->message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
