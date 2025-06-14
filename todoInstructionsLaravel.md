`laravel new simpleToDo`  

# git

git init
git commit -m "first commit"
git remote add origin git@github.com:alkisax/simpleTodoLaravel.git
git push origin main

# welcome page
#### resources\views\welcome.blade.php
```xml
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex justify-center p-4">
      <img 
        src="/welcome.png" 
        alt="welcome image"
        class="max-w-full h-auto"
      >
  </div>  
</body>
</html>
```

# layout

#### resources\views\components\layout.blade.php
```xml
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
       <button type="button"
        class="px-5 py-2.5 rounded-lg text-sm cursor-pointer tracking-wider font-medium border-2 border-current outline-none bg-purple-700 hover:bg-transparent text-white hover:text-purple-700 transition-all duration-300">Purple</button>
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
```

`php artisan make:component Btn`  
#### resources\views\components\btn.blade.php
```php
<a href="{{ $href }}">
  <button type="button"
  class="px-5 py-2.5 rounded-lg text-sm cursor-pointer tracking-wider font-medium border-2 border-current outline-none bg-purple-700 hover:bg-transparent text-white hover:text-purple-700 transition-all duration-300 w-4/5">
    {{ $slot }}
  </button>
</a>
```