<?php
namespace src\controllers;

use core\Controller;

class SearchController extends Controller {
    public function index() {
        $this->render('category');
    }
}