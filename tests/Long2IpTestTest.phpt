<?php

namespace CZechBoY\Ip32bit;

require_once __DIR__ . '/../vendor/autoload.php';

use Tester\Assert;
use Tester\TestCase;

/**
 * @testCase
 */
final class IpConverterTest extends TestCase
{
    public function testSmallNumber()
    {
        Assert::same('31.30.155.91', IpConverter::long2ip(522099547.0));

        Assert::same(2130706433.0, IpConverter::ip2long('127.0.0.1'));
    }

    public function testBigNumber()
    {
        Assert::same('194.212.3.119', IpConverter::long2ip(3268674423.0));

        Assert::same(3363174417.0, IpConverter::ip2long('200.117.248.17'));
    }
}

(new IpConverterTest())->run();
