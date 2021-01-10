<?php

/**
 * Created by Rick Dennison
 *
 * Date: 1/3/2021
 * File: Posts.php
 * Name: MVC
 */

namespace App\Controllers;

use \Core\View;

class Posts extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Posts/index.html', [
            'name' => 'rick',
            'colors' => ['red', 'white', 'blue']
        ]);
        
        // echo '<p>Route parameters: <pre>' . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    /**
     * Show the edit page
     *
     * @return void
     */
    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>' .
            htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}