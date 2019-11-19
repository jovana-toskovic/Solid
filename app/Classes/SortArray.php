<?php
namespace App\Classes;

use App\Contracts\SortArrayInterface;

class SortArray
{
    public function sort(SortArrayInterface $array)
    {
        $this->loop($i=0, $j=0, $array, function(?int $i, ?int $j, SortArrayInterface $array){
            $this->loop($j, $i, $array, function(?int $j, ?int $i, SortArrayInterface $array){
                if($array->check($i, $j)){
                    $array->swap($j, $i);
                } 
            });
        });
        return $array->get();
    }

    private function loop(?int $iterator, ?int $j, SortArrayInterface $array, Callable $insideFunction)
    {
        for ($iterator; $iterator <= $array->length() - 1; $iterator++) {
            $insideFunction($i=$iterator, $j, $array, $insideFunction);
        }
    }
}
