<?php
/**
 * Created by Rick Dennison
 *
 * Date: 1/3/2021
 * File: Home.php
 * Name: MVC
 */

namespace App\Controllers;


use Core\View;

class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html', [
            'name' => 'rick',
            'colors' => ['red', 'white', 'blue']
        ]);
    }

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
//        echo "(before) ";
//        return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }
}