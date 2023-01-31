<?php
// Anonymous function
$greet = function(string $name) {
  return "Hello, $name!" . PHP_EOL;
};
echo $greet("Vledlana");    // Output: Hello, Vledlana

// Different eg
$numbers = ["1", 2, 3, 4, 5];

// Anonymous function to square a number
$square = function($num) {
  return $num * $num;
};

// Use the anonymous function to square each number in the array
$squaredNumbers = array_map($square, $numbers);

print_r($squaredNumbers);
// Output: Array ( [0] => 1 (str) [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

// Anonymous class
$logger = new class {
  public function getLog($message) {
    echo "Log = $message" . PHP_EOL;
  }
};

$logger->getLog("The Message Is Just Like This"); 
// Output: Log = The Message Is Just Like This
