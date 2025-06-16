<x-layout>
  <form method="POST" action="/todos/{{ $todo->id }}">
    @csrf 
    @method('PATCH')
    
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm/6 font-medium text-gray-900">title</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input 
                  type="text" 
                  name="title" 
                  id="title" 
                  class="border border-black block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 px-3" 
                  placeholder="Shift Leader" 
                  value="{{ $todo->title }}"
                  required
                >
              </div>

              @error('title')
               <p class="text-xs text-red-500 font-semibold">{{ $message }}</p> 
              @enderror
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="body" class="block text-sm/6 font-medium text-gray-900">text body</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input 
                  type="text" 
                  name="body" 
                  id="body" 
                  class="border border-black block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 px-3" 
                  placeholder="$50,000" 
                  value="{{ $todo->body }}"
                  required
                >
              </div>
              @error('body')
                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p> 
              @enderror
            </div>
          </div>
        </div>
          <p class="mt-2">completed: {{ $todo->completed ? ' ✅' : ' ❌' }}</p>

      </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
      <!-- όλη η σελίδα είναι μια φορμ που κάνει πατς. αλλά το delete είναι κάτι άλλο. όμως δεν μπορω να βάλω φόρμα μέσα σε φόρμα. Προσοχή στο form="" Μέσα στο btn -->
      <div class="flex items-center">
        <button
          form="delete-form"
          class="text-red-500 text-sm font-bold"  
        >
          Delete
        </button>
      </div>

      <div class="flex items-center gap-x-6">
        <a href="/todos/{{ $todo->id }}" class="text-sm/6 font-semibold text-gray-900">
          Cancel
        </a>

        <button
          form="toggle-form"
          class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600"  
        >
          Toggle completed
        </button>
        
        <div>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Update
          </button>          
        </div>
      </div>

    </div>
  </form>

  <div class="mt-2 w-1/2">
    <form  
      method="POST" 
      action="/todos/{{ $todo->id }}/toggle"
      class="hidden"
      id="toggle-form"
    >
      @csrf
      @method('PATCH')
  
    </form>
  </div>

  <form 
    method="POST" 
    action="/todos/{{ $todo->id }}" 
    class="hidden"
    id="delete-form"  
  >
    @csrf
    @method('DELETE')
  </form>
</x-layout>