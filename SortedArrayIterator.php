<?php

declare(strict_types=1);

namespace IteratorExample;

class SortedArrayIterator implements \Iterator
{
    private array $array;
    private int $index = 0;

    public function __construct(array $array)
    {
        $this->array = $array;
        sort($this->array);
    }

    public function current(): mixed
    {
        return $this->array[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->array[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}