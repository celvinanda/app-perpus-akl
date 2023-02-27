<?php

namespace Http\Controllers;

use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class AbsensiControllerTest extends TestCase
{

    public function testGenerate()
    {
        $password = Str::random(6);
        $this->assertIsString($password);
        $this->assertEquals(6, strlen($password));
        dd($password);
    }
}
