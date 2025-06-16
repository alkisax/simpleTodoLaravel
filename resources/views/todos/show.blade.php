<x-layout>
  <!-- <x-slot:heading>
    Job  
  </x-slot:heading> -->
  <h2 class="font-bold text-lg">{{ $todo->title }}</h2>

<p>
  {{ $todo->body }}
</p>
<div class="text-right text-gray-400 text-sm">
  <p>completed: {{ $todo->completed ? ' ✅' : ' ❌' }}</p>
</div>

<p class="mt-6">
  <x-btn href="/todos/{{ $todo->id }}/edit" color='blue'>Edit todo</x-btn>
</p>

</x-layout>