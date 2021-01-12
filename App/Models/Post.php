<?php
/**
 * Created by Rick Dennison
 * Date:      1/11/21
 *
 * File Name: Post.php
 * Project:   MVC-2021
 */

namespace App\Models;

use PDO;
use PDOException;

class Post extends \Core\Model
{
    /**
     * @return mixed
     */
    public static function getAll()
    {
        try {
            $db = static::getDB();

            $stmt = $db->query('SELECT id, title, content FROM posts
                                ORDER BY created_at');

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}