<?php

namespace UptimeMonitor\Core;

/**
 * Helper class with static helper functions
 */

class Helpers {

    /**
     * Wraps a print_r in <pre>
     *
     * @param mixed $var
     * @return void
     */
    public static function pre_r( $var ) {
        echo '<pre>';
        print_r( $var );
        echo '</pre>';
    }

    /**
     * Convery Bytes per second to Kb/s
     *
     * @param [type] $bytesPerSecond
     * @return void
     */
    public static function bytesPerSecondToKbps( $bytesPerSecond ) {
        $conversionFactor = 8 / 1000; // 8 bits per Byte, 1000 bits per Kilobit
        $kbps = $bytesPerSecond * $conversionFactor;
        return $kbps;
    }

}
