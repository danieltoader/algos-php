<?php
include "../../vendor/autoload.php";

use Algos\Search\BinarySearch;
use Algos\Search\Facade;
use Algos\Search\LinearSearch\LinearSearch;
use Algos\Contracts\AlgorithmException;

$numbers = range(1, 200, 5);

echo "Binary recursive" . PHP_EOL;
$needle = 31;
try {
    $index = Facade::run(new BinarySearch\Recursive(), $numbers, $needle);
    echo "$needle Found at position $index" . PHP_EOL;
} catch (AlgorithmException $e) {
    echo $e->getMessage() . PHP_EOL;
}
echo PHP_EOL;

echo "Binary iterative" . PHP_EOL;
$needle = 500;
try {
    $index = Facade::run(new BinarySearch\Iterative(), $numbers, $needle);
    echo "$needle Found at position $index" . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
echo PHP_EOL;

echo "Linear" . PHP_EOL;
$needle = 51;
try {
    $index = Facade::run(new LinearSearch(), $numbers, $needle);
    echo "$needle Found at position $index" . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
echo PHP_EOL;

