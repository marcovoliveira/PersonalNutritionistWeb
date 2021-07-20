@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# Ola {{ $greeting }}
@else
@if ($level == 'error')
# Erro ao processar a mensagem, contacte o Nutricionista!
@else
# Ola,
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Atentamente,<br>Beatriz Baptista                      {{-- {{ config('app.name') --}}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
Se esta a ter problemas em clicar no botão "{{ $actionText }}" , copie e cole o link abaixo
no seu navegador.: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset
@endcomponent
