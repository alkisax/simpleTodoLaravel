<x-layout>
  <div class="space-y-4">
    @foreach ($todos as $todo)
        <a 
          href="/todos/{{ $todo['id'] }}" 
          class="block px-4 py-6 border border-gray-200 rounded-lg"
        >

          <div>
            <strong>{{ $todo->title }}</strong>
            <br>
            <p  class="text-gray-600 ">
              {{ $todo->body }}
            </p>
          </div>

          <div class="text-right text-gray-400 text-sm">
            <p>completed: {{ $todo->completed ? ' ✅' : ' ❌' }}</p>
          </div>

          <div class="w-full text-right mt-2">
            <span class="text-right text-gray-400 text-sm">
              created at {{ $todo->created_at->format('Y-m-d H:i') }}
            </span>
          </div>

        </a>
    @endforeach
    <div>
      {{ $todos->links() }}
    </div>
  </div>
</x-layout>