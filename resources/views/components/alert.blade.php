@props(['tipo' => 'success'])

@php
    switch ($tipo) {
        case 'danger':
            $class = 'bg-red-100 border-l-4 border-red-500 text-red-700 p-4';
            break;
        case 'success':
            $class = 'bg-green-100 border-l-4 border-green-500 text-green-700 p-4';
            break;
        
        default:
            $class = 'bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4';
            break;
    }
@endphp

<div {{$attributes->merge(['class' => $class])}} role = "alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{ $body }}</p>
</div>