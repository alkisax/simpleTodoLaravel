<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
  <header class="w-full bg-blue-600 py-4 shadow-md">
    <h1 class="text-white text-center text-xl font-bold">Simple Random & todo app</h1>
  </header>

  <main class="flex flex-1 h-full">
    <div id="sidebar" class="w-1/5 bg-gray-100 p-4">
       <x-btn href="/">home</x-btn>
       <x-btn href="/random">random</x-btn>
       <x-btn href="/todos">todos</x-btn>
    </div>

    <div id="content" class="w-4/5 p-4">
      {{ $slot }}
    </div>
  </main>

  <footer class="w-full bg-gray-800 py-4">
    <p class="text-white text-center">© 2025 Simple Random & todo app. For learning laravel purpose.</p>
  </footer>

</body>
</html>