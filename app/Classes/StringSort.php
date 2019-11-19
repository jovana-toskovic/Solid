<?php
namespace App\Classes;

use App\Contracts\SortArrayInterface;

class StringSort implements SortArrayInterface
{
    // not need
    public $string;
    // change to private
    public $array;

    public function __construct(string $string)
    {
        // not need
        $this->string = $string;
        $this->array = str_split($this->string); 
    }
    // this metod need to return string, change name to get()
    public function getArray(): array
    {
        return $this->array;
    }
    public function check(?int $i, ?int $j, array $array): bool
    {
        return $array[$j] > $array[$i];
    }
    public function swap(?int $next, ?int $previous, array $array)
    {
        $p = $array[$previous];
        $this->array[$previous] = $array[$next];
        $this->array[$next] = $p;
    }
}
