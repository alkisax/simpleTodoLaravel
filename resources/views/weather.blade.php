<p>weather</p>
<x-layout>
  <div class="p-6">
    <h1 class="text-xl font-bold mb-4">Weather in {{ $weather['name'] ?? 'Unknown' }}</h1>

    @if(isset($weather['main']))
      <p><strong>Temperature:</strong> {{ $weather['main']['temp'] }}°C</p>
      <p><strong>Humidity:</strong> {{ $weather['main']['humidity'] }}%</p>
      <p><strong>Conditions:</strong> {{ $weather['weather'][0]['description'] }}</p>
    @else
      <p class="text-red-500">Could not fetch weather data.</p>
    @endif
  </div>
</x-layout>