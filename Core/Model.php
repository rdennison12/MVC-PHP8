<?php
/**
 * Created by Rick Dennison
 * Date:      1/11/21
 *
 * File Name: Model.php
 * Project:   MVC-2021
 */

namespace Core;

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
            $host = 'localhost';
            $dbname = 'mvc';
            $username = 'root';
            $password = 'root';


            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                    $username, $password);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $db;
    }
}