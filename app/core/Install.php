<?php

namespace UptimeMonitor\Core;

use UptimeMonitor\Core\View;

/**
 * Class for creating tables and other installation tasks
 */

class Install
{
    /**
     * Create the database and installation operations
     *
     * @return void
     */
    public static function install()
    {
        $db = new DB();
        // Create sites table
        $sql = "CREATE TABLE `". DBNAME ."`.`sites` (`id` INT NOT NULL AUTO_INCREMENT, `name` TEXT NOT NULL, `URL` TEXT NOT NULL, PRIMARY KEY (`id`))";
        $result = $db->execute($sql);

        View::load('dashboard', [ 
            'message'    => 'Installation has been successful. Database tables have been created.',
            'pageTitle' => 'Install complete',
        ]);
    }
}
