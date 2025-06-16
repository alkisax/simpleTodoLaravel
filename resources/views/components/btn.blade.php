
@props(['href' => null, 'type' => 'button', 'color' => 'purple'])

@php
  $colorClass = "bg-{$color}-700 hover:bg-transparent text-white hover:text-{$color}-700 border-{$color}-700";
@endphp

@if ($href)
  <a href="{{ $href }}">
    <button 
      type="{{ $type }}" 
      class="px-5 py-2.5 m-0.5 rounded-lg text-sm cursor-pointer tracking-wider font-medium border-2 border-current outline-none transition-all duration-300 w-4/5   {{ $colorClass }}">
      {{ $slot }}
    </button>
  </a>
@else
  <button 
    type="{{ $type }}" 
    class="px-5 py-2.5 m-0.5 rounded-lg text-sm cursor-pointer tracking-wider font-medium border-2 border-current outline-none transition-all duration-300 w-4/5   {{ $colorClass }}">
    {{ $slot }}
  </button>
@endif

