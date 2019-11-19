<?php
namespace App\Classes;

use App\Contracts\SortArrayInterface;

class IntArraySort implements SortArrayInterface
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }
    public function get(): array
    {
        return $this->array;
    }
    public function length(): int
    {
        return count($this->array);
    }
    public function check(?int $i, ?int $j): bool
    {
        return $this->array[$j] > $this->array[$i];
    }
    public function swap(?int $next, ?int $previous)
    {
        $p = $this->array[$previous];
        $this->array[$previous] = $this->array[$next];
        $this->array[$next] = $p;
    }
}
