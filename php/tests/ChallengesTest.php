<?php

namespace Tests;

use LLyam\CodeWars\Challenges;

class ChallengesTest extends TestCase
{
    public function test_square_case()
    {
        $this->assertEquals(4, Challenges::squareSum([2]));
        $this->assertEquals(5, Challenges::squareSum([1,2]));
    }
}