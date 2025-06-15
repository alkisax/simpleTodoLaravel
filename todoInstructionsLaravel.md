`laravel new simpleToDo`  

# git

git init
git commit -m "first commit"
git remote add origin git@github.com:alkisax/simpleTodoLaravel.git
git push origin main

# welcome page / layout
#### resources\views\welcome.blade.php
```xml
<x-layout>
  <div class="flex justify-start p-4">
      <img 
        src="/welcome.png" 
        alt="welcome image"
        class="max-w-full max-h-[70vh] object-contain"
      >
  </div>
</x-layout>  
```

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

# random page
η λογική βρίσκετε μέσα σε έναν controller οπότε φτιαχνω πρωτα έναν  
`php artisan make:controller`  
#### app\Http\Controllers\RandomController.php
- οι τιμές έρχονται απέξω μέσω του `Request $request`. Ζητάει ένα min και max οπότε θα πρέπει να φροντίσω το blade μου να έχει input με name="min/max"  
- `$min = $request->filled('min') ? $request->input('min') : 0;` αυτό χρειάζετε για να δημιουργήσω default αρχικές τιμές αν δεν έχουν συμπληρωθεί
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
  public function generate(Request $request)
    {
      // dd('controller hit');
      $min = $request->filled('min') ? $request->input('min') : 0;
      $max = $request->filled('max') ? $request->input('max') : 100;

      // Swap if needed
      if ($max < $min) {
          [$min, $max] = [$max, $min];
      }

      $randomNum = rand($min, $max);

      return view('random', [
        'randomNum' => $randomNum,
        'min' => $min,
        'max' => $max
      ]);
    }
}
```
o controller πρέπει να περαστεί στο web.php εδώ θέλω να έχω πρόβλεψη και για get (δηλ να δίχνει την standar σελίδα την πρώτη φορά που μπαίνει) αλλα και για post που θα καλέσει τον controller μου και θα κάνει rerender  
#### routes\web.php
```php
<?php

use App\Http\Controllers\RandomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Show the form
Route::get('/random', function () {
    return view('random');
});
// Handle the form submission
Route::post('/random', [RandomController::class, 'generate']);
```
τωρα μπορω να φτιάξω το blade μου για την εμφάνηση της σελίδας  
#### resources\views\random.blade.php
- Τα `method="POST"  action="/random"` στο form με στέλνουν μέσω του web στον controller.  
- Και τα `name="min" name="max"` στα input καλούντε απο τον controller για να παρει τις αντίστοιχες τιμές 
- το `value="{{ old('min', $min ?? 0) }}"` κρατάει τις παλιές τιμές αν υπάρχουν
- το `@isset($randomNum)` χρειάζετε γιατί την πρώτη φορά δεν υπάρχει τιμή
```php
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
```
#### resources\views\components\btn.blade.php
- επειδή πριν το κουμπί μου λειτουργούσε σαν λινκ επρεπε να προσθέσω μια υποπερίπτωση ως if για αν είναι κανονικό κουμπι
```php

@props(['href' => null, 'type' => 'button'])

@if ($href)
  <a href="{{ $href }}">
    <button 
      type="{{ $type }}" 
      class="px-5 py-2.5 rounded-lg text-sm cursor-pointer tracking-wider font-medium border-2 border-current outline-none bg-purple-700 hover:bg-transparent text-white hover:text-purple-700 transition-all duration-300 w-4/5">
      {{ $slot }}
    </button>
  </a>
@else
  <button 
    type="{{ $type }}" 
    class="px-5 py-2.5 rounded-lg text-sm cursor-pointer tracking-wider font-medium border-2 border-current outline-none bg-purple-700 hover:bg-transparent text-white hover:text-purple-700 transition-all duration-300 w-4/5">
    {{ $slot }}
  </button>
@endif
```