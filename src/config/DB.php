<?php

namespace Config;

/**
 * This database config
 *
 * @category   Config
 * @package    Config
 * @author     Andrej <*.*.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/PackageName
 * @since      Class available since Release 1.0.0
 */
class Database {

    /**
     * Database host
     * 
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * 
     * @var string
     */
    const DB_NAME = 'fashiony_ogs';

    /**
     * Database username
     * 
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * 
     * @var string
     */
    const DB_PASSWORD = '';

	const BASE_URL =  "http://localhost/se06-5.3/";

	// Getting Admin url
	const ADMIN_URL = self::BASE_URL . "admin" . "/";
	function GET_BASE_URL() {
		return self::BASE_URL ;
	}
}
