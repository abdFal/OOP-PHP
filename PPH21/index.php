<?php
require_once "App/init.php";
$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);
$calculator = new PPH21Calculator($first, $second, $third, $fourth);

echo $first->calculate(10000000000);
echo PHP_EOL;

echo $second->calculate(10000000000);
echo PHP_EOL;

echo $third->calculate(10000000000);
echo PHP_EOL;