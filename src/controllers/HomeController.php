<?php
namespace src\controllers;

use core\Controller;
use src\handlers\HandbagHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function index() {

        $handbags = HandbagHandler::getAllHandbags();

        $this->render('home', ['handbags' => $handbags]);
    }
}