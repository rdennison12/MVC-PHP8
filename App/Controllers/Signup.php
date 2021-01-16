<?php
/**
 * Created by Rick Dennison
 * Date:      1/14/21
 *
 * File Name: Signup.php
 * Project:   MVC-2021
 */

namespace App\Controllers;

use App\Models\User;
use \Core\View;
use function header;

class Signup extends \Core\Controller
{
    /**
     * Show the signup page
     * @return void
     */
    public function newAction()
    {
        View::renderTemplate('Signup/new.html');
    }

    /**
     * Sign up a new user
     *
     * @return void
     */
    public function createAction()
    {
        $user = new User($_POST);

        if ($user->save()) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/signup/success', true, 303);
            exit;
        } else {
            View::renderTemplate('Signup/new.html', [
                'user' => $user
            ]);
        }
    }

    /**
     * Show the success page
     *
     */
    public function successAction()
    {
        View::renderTemplate('Signup/success.html');
    }
}