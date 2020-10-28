<?php
namespace src\controllers;

use core\Controller;
use src\handlers\HandbagHandler;

class SearchController extends Controller {
    public function index($atts = []) {
        $q = filter_input(INPUT_GET, 'q');

        if(empty($q)) {
            $this->render('category');
        } else {
            $bags = HandbagHandler::searchHandbag($q);

            $this->render('search', [
                'q' => $q,
                'bags' => $bags
                ]);
        }

    }
}