<?php

namespace CZechBoY\Ip32bit;

class Long2Ip
{
    /**
     * @param int $long
     *
     * @return string
     */
    public static function long2ip($long)
    {
        $ip = '';

        for ($i = 3; $i >= 0; $i--) {
            $ip .= bcdiv($long, bcpow(256, $i));
            $long -= bcmul(bcdiv($long, bcpow(256, $i)), bcpow(256, $i));

            if ($i > 0) {
                $ip .= '.';
            }
        }

        return $ip;
    }
}
