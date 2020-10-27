<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;

class LoginController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();
    }
    
    public function index() {

        if ($this->loggedUser === false) {
            $this->render('login');
        } else {
            $this->render('settings');
        }
    }

    public function singIn() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        echo $email.' '.$password;
    }

    public function singUp() {
        $name = filter_input(INPUT_POST, 'nameSingUp');
        $email = filter_input(INPUT_POST, 'emailSingUp', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'passwordSingUp');
        $repeatPassword = filter_input(INPUT_POST, 'repeatPassword');

        echo $name.' '.$email.' '.$password.' '.$repeatPassword;
    }
}