<?php

declare(strict_types=1);

function generateRandomNumbers(int $numberCount): array
{
    $result = array();
    for ($i = 0; $i < $numberCount; $i++) {
        $result[] = rand(0, 999);
    }

    return $result;
}

function printWithForeach(iterable $iterable): void
{
    print("Iterating over an " . gettype($iterable) . " with foreach:\n");

    foreach ($iterable as $item) {
        echo($item . "\n");
    }
}

function printIterator(\Iterator $iterator): void
{
    print("Iterating over an iterator with object methods:\n");

    while ($iterator->valid()) {
        echo($iterator->current() . "\n");
        $iterator->next();
    }
}