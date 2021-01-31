<?php

namespace App;

use PHPUnit\Framework\TestCase;

class HogeTest extends TestCase
{
    public function testHoge()
    {
        $this->assertEquals('very overweight', Main::calc(1.60, 70));
        $this->assertEquals('overweight', Main::calc(1.60, 65));
        $this->assertEquals('normal', Main::calc(1.60, 60));
        $this->assertEquals('lean', Main::calc(1.60, 50));
        $this->assertEquals('very lean', Main::calc(1.60, 40));
    }
}