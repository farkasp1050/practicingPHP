<?php

declare(strict_types=1);

require_once 'SortedArrayIterator.php';
require_once 'utils.php';

use IteratorExample\SortedArrayIterator;


$test_array = generateRandomNumbers(5);

echo "Testing ARRAY iteration:\n";
printWithForeach($test_array);

$iterator = new SortedArrayIterator($test_array);
echo "Testing ITERATOR iteration:\n";
printWithForeach($iterator);
printIterator($iterator);