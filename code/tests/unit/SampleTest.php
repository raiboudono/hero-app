<?php

declare(strict_types=1);

namespace tests\unit;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function sample()
    {
        $this->expectException(\Exception::class);
    }
}
