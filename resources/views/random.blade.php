<x-layout>
  <div class="flex justify-center">
    <form 
      method="POST"
      action="/random" 
      class="gap-4 w-full"
    >
    @csrf
      <input 
        type="number" 
        class="border-2 border-gray-300 rounded-lg p-2 w-1/3" 
        placeholder="Enter min value" 
        id="minInput" 
        name="min"
        value="{{ old('min', $min ?? 0) }}"
      >
      <input 
        type="number" 
        class="border-2 border-gray-300 rounded-lg p-2 w-1/3" 
        placeholder="Enter max value" 
        id="maxInput" 
        name="max"
        value="{{ old('max', $max ?? 100) }}"
      >

      <p class="text-muted">
        Between {{ $min ?? 0 }} and {{ $max ?? 100 }} 
      </p>

      <x-btn type="submit" class="generate-btn">
        Generate New Number
      </x-btn>
    </form>

  </div>

@isset($randomNum)
  <h3>Generated Number: <span class="text-primary">{{ $randomNum }}</span></h3>
@endisset
</x-layout> 