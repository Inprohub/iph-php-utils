<?php

namespace Helper;

use Inprohub\Utils\Helper\Tool;
use PHPUnit\Framework\TestCase;

class ToolTest extends TestCase
{

    /**
     * @return void
     */
    public function testTimestampCheck(): void
    {
        $timestamp = 123456789;
        $result = Tool::timestampCheck($timestamp);
        $this->assertFalse($result);

        $timestamp = 1234567891230;
        $result = Tool::timestampCheck($timestamp);
        $this->assertTrue($result);
    }
}
