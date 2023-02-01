<?php
// ... define this is variadic
class p{
    static function sum(int ...$numbers) {
      return array_sum($numbers) . PHP_EOL;
    }
}
echo p::sum(1, 2, 3, 4, 5);

// input to variadic using ... also
$arr = [7,7,7];
echo p::sum(...$arr);

function greet(string $greeting, string ...$names) {
  return $greeting . " " . implode(", ", $names) . "!";
}

echo greet("Hi", "John", "Jihn", "Jim");
