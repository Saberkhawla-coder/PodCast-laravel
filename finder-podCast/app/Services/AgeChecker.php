<?php
namespace App\Services;

class AgeChecker {
    
    public function isAdult($age) {
        return $age >= 18;
    }
}
