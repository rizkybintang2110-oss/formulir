    @props(['type' => 'info'])

@php
    $baseClasses = "p-3 mb-4 rounded";
    $typeClasses = match($type) {
        'success' => 'bg-green-100 text-green-700',
        'error'   => 'bg-red-100 text-red-700',
        'warning' => 'bg-yellow-100 text-yellow-700',
        default   => 'bg-blue-100 text-blue-700',
    };
@endphp

<div class="{{ $baseClasses }} {{ $typeClasses }}">
    {{ $slot }}
</div>
