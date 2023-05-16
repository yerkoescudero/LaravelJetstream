@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $clases = "bg-blue-100 border-orange-500 text-orange-700";
            break;
        
        case 'danger':
            $clases = "bg-red-100 border-orange-500 text-orange-700";
            break;

        default:
            $clases = "bg-blue-100 border-orange-500 text-orange-700";
            break;
    }
@endphp

{{-- @dump($attributes) --}}

<article {{$attributes->merge(['class' => "border-l-4 p-4 $clases", "role" => "alert"])}} >
    <p class="font-bold">{{$title}}</p>
    {{ $slot }}
  </article>

  {{-- 
    o así:
    <article {{$attributes}} class="{{$clases}}" role="alert">
    <p class="font-bold">{{$title}}</p>
    {{ $slot }}
  </article> --}}