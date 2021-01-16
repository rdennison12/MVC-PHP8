<?php
/**
 * Created by Rick Dennison
 * Date:      1/16/21
 *
 * File Name: Account.php
 * Project:   MVC-2021
 */

namespace App\Controllers;

use App\Models\User;


class Account extends \Core\Controller
{
    /**
     * Validate if email is available (AJAX) for a new signup.
     *
     * @return void
     */
    public function validateEmailAction()
    {
        $is_valid = ! User::emailExists($_GET['email']);
        header('Content-Type: application/json');
        echo json_encode($is_valid);
    }
}