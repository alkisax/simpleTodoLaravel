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
