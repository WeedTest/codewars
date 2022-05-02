<?php

namespace LLyam\CodeWars;

class Challenges
{
    public static function squareSum(array $numbers)
    {
        $state = [];
        $squares = [];

        foreach ($numbers as $key => $number) {
            if(!array_key_exists($number, $state)){
                $state[$number] = $number * $number;
            }
            $squares[] = $state[$number];
        }
        return array_sum($squares);
    }
}