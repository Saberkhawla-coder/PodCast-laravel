<?php

namespace Tests\Unit;

use App\Services\AgeChecker;
use PHPUnit\Framework\TestCase;

class AgeCheckerTest extends TestCase
{
    /**
     * A basic unit test example.
     */
   public function test_user_is_adult() {
        $checker = new AgeChecker();
        $this->assertTrue($checker->isAdult(20));
    }

   
}
