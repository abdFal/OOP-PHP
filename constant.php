<?php
class MyMath {
    const PI = 3.14;
    static $counter = 0;

    public static function add($a, $b) {
        self::$counter++;
        return $a + $b;
    }

    public static function getCounter() {
        return self::$counter;
    }
}

echo MyMath::PI; // Outputs: 3.14
echo MyMath::add(1, 2); // Outputs: 3
echo MyMath::getCounter(); // Outputs: 1
