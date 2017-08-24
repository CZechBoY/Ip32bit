<?php

namespace CZechBoY\Ip32bit;

require_once __DIR__ . '/../vendor/autoload.php';

use Tester\Assert;
use Tester\TestCase;

/**
 * @testCase
 */
final class Long2IpTest extends TestCase
{
    public function testSmallNumber()
    {
        Assert::same('31.30.155.91', Long2Ip::long2ip('522099547'));
    }

    public function testBigNumber()
    {
        Assert::same('194.212.3.119', Long2Ip::long2ip('3268674423'));
    }
}

(new Long2IpTest())->run();
