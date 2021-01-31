<?php

namespace App;

class Main
{
    public static function calc(float $height, float $weight) {
        $bmi = self::getBmi($height, $weight);
        if ($bmi >= 26.5) return 'very overweight';
        if ($bmi >= 24.0) return 'overweight';
        if ($bmi >= 20.0) return 'normal';
        if ($bmi >= 17.7) return 'lean';
        return 'very lean';
    }

    public static function getBmi(float $height, float $weight) {
        return $weight/$height/$height;
    }
}