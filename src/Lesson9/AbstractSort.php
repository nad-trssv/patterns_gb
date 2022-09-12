<?php

namespace App\Lesson9;

abstract class AbstractSort implements ISort
{
    protected function swap(array $elements, int $first, int $second): array
    {
        $tmp = $elements[$second];
        $elements[$second] = $elements[$first];
        $elements[$first] = $tmp;

        return $elements;
    }
}
