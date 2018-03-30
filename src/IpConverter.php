<?php

namespace CZechBoY\Ip32bit;

class IpConverter
{
    /**
     * @param float $long
     *
     * @return string
     */
    public static function long2ip($long)
    {
        $ip = '';

        for ($i = 3; $i >= 0; $i--) {
            $powed = bcpow(256, $i);

            $ip .= bcdiv($long, $powed);
            $long -= bcmul(bcdiv($long, $powed), $powed);

            if ($i > 0) {
                $ip .= '.';
            }
        }

        return $ip;
    }

    /**
     * @param string $ip
     *
     * @return float
     */
    public static function ip2long($ip)
    {
        $blocks = explode('.', $ip);
        $i = count($blocks) - 1;
        $long = 0.0;

        foreach ($blocks as $block) {
            $long += $block * bcpow(256, $i);

            $i--;
        }

        return $long;
    }
}
