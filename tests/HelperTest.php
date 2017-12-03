<?php

namespace Tests;

use Myerscode\Utilities\Strings\Utility as StringUtility;
use Myerscode\Utilities\Bags\Utility as BagsUtility;
use Myerscode\Utilities\Numbers\Utility as NumbersUtility;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{

    public function testHelperMakeUtility()
    {
        $this->assertInstanceOf(StringUtility::class, text(''));
        $this->assertInstanceOf(BagsUtility::class, bag([]));
        $this->assertInstanceOf(NumbersUtility::class, number(0));
    }
}
