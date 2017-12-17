<?php

namespace App\Tests;

use App\Tool;
use PHPUnit\Framework\TestCase;

class ToolTest extends TestCase
{
    public function testEmptyStrings()
    {
        $this->assertEquals('', Tool::upperConcat('', ''));
    }
}
