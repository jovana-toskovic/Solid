<?php

namespace App\Contracts;

interface SortArrayInterface
{
    public function swap(?int $next, ?int $previous);
    public function check(?int $i, ?int $j);
    public function length();
}