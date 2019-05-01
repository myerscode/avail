<?php

namespace Tests;

use Myerscode\Utilities\Strings\Utility as StringUtility;
use Myerscode\Utilities\Bags\Utility as BagsUtility;
use Myerscode\Utilities\Numbers\Utility as NumbersUtility;
use Myerscode\Utilities\Web\Utility as WebUtility;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{

    public function testHelperMakeUtility()
    {
        $this->assertInstanceOf(StringUtility::class, text(''));
        $this->assertInstanceOf(BagsUtility::class, bag([]));
        $this->assertInstanceOf(NumbersUtility::class, number(0));
        $this->assertInstanceOf(WebUtility::class, web('https://myerscode.com'));
    }
}
