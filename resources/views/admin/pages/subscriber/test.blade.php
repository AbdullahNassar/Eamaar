@component('mail::message')
# Eamaar Mail Services

{{$subject}}

@component('mail::button', ['url' => 'http://localhost/PHP-Apps/Eamaar'])
Visit Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}.
@endcomponent
