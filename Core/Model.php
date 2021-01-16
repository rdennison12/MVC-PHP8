<?php
/**
 * Created by Rick Dennison
 * Date:      1/11/21
 *
 * File Name: Model.php
 * Project:   MVC-2021
 */

namespace Core;

use App\Config;
use PDO;
use PDOException;

abstract class Model
{
    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    public static function getDB()
    {
        static $db = null;

        if ($db === null) {

            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';

            $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            // Throw an exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $db;
    }
}