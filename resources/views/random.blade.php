<x-layout>
  <div class="flex justify-center p-4">
    <p>welcome from random</p>
  </div>
</x-layout> 

<?php
$userInput = 0;
$min = 0;
$randomNum = 100;
$temp = null;

function generateRandomNum ($max, $min) {
  if ($max < $min) {
    $temp=$max;
    $max = $min;
    $min = $temp;
  }
  $randomNum = rand($min, $max);
  return $randomNum;
}

?>