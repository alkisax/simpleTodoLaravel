
@props(['href' => null])
<a href="{{ $href }}">
  <button type="button"
  class="px-5 py-2.5 rounded-lg text-sm cursor-pointer tracking-wider font-medium border-2 border-current outline-none bg-purple-700 hover:bg-transparent text-white hover:text-purple-700 transition-all duration-300 w-4/5">
    {{ $slot }}
  </button>
</a>
