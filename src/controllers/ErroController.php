<?php
namespace src\controllers;

use core\Controller;

class ErroController extends Controller {
    public function index() {
        $this->render('404');
    }

    public function sorry() {
        $this->render('sorry');
    }
}