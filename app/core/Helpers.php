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

}
