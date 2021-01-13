@component('mail::message')
    <h1>{{ $data['greeting'] }}</h1>
    <h1>Message: {{ $data['body'] }}</h1>
    <h1>Message: {{ $data['thanks'] }}</h1>
@endcomponent
