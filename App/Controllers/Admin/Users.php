<?php
/**
 * Created by Rick Dennison
 *
 * Date: 1/4/2021
 * File: Users.php
 * Name: MVC
 */

namespace App\Controllers\Admin;


class Users
{
    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example
        // return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo 'User admin index';
    }
}