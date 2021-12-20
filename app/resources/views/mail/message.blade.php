@component('mail::message')
From, {{ $data->name }}<br>
Email: {{ $data->email  }}<br>
Message:<br>
{{ $data->message  }}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

{{ config('app.name') }}
@endcomponent
