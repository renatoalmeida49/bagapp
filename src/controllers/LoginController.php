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
            $this->render('settings', ['name' => $this->loggedUser->name]);
        }
    }

    public function singIn() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if($email && $password) {
            $token = UserHandler::verifyLogin($email, $password);

            if($token) {
                $_SESSION['token'] = $token;
                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['flash'] = 'Algo errado com login o senha';
            $this->redirect('/login');
        }
    }

    public function singUp() {
        $name = filter_input(INPUT_POST, 'nameSingUp');
        $email = filter_input(INPUT_POST, 'emailSingUp', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'passwordSingUp');
        $repeatPassword = filter_input(INPUT_POST, 'repeatPassword');

        if($password == $repeatPassword) {
            if(UserHandler::emailExists($email) == false) {
                $token = UserHandler::insertUser($name, $email, $password);

                $_SESSION['token'] = $token;
                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'E-mail já cadastrado';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['flash'] = "Senhas digitadas não conferem";
            $this->redirect('/login');
        }
    }

    public function logout() {
        $_SESSION['token'] = '';
        $this->redirect('/');
    }
}