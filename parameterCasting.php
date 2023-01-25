<?php
class MyCalculator {
    public function add(int $a, int $b): int {
        return $a + $b;
    }

    public function divide(float $a, float $b): float {
        return $a / $b;
    }

    public function concat(string $a, string $b): string {
        return $a . $b;
    }
}

$myCalculator = new MyCalculator();

echo $myCalculator->add(1, 2); // Outputs: 3
echo $myCalculator->divide(5, 2); // Outputs: 2.5
echo $myCalculator->concat("Hello", " World"); // Outputs: "Hello World"

class MyArrayManipulator {
    public function addElement(array $arr, $element): array {
        $arr[] = $element;
        return $arr;
    }
}

$myArrayManipulator = new MyArrayManipulator();

$arr = [1, 2, 3];
$newArr = $myArrayManipulator->addElement($arr, 4);
print_r($newArr); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
