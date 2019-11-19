<?php
namespace App\Classes;

use App\Contracts\SortArrayInterface;

class StringSort implements SortArrayInterface
{
    public $array;

    public function __construct(string $string)
    {
        $this->array = str_split($string); 
    }
    public function get(): string
    {
        return implode($this->array);
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
