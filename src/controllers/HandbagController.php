<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UserHandler;
use src\handlers\HandbagHandler;

class HandbagController extends Controller {
    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();

        if($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function insert() {
        $flash = '';

        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('insertHandbag', ['flash' => $flash]);
    }

    public function insertAction() {
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        $rate = filter_input(INPUT_POST, 'rate');
        $category = filter_input(INPUT_POST, 'category');
        $photo = $_FILES['photo'];

        if(in_array($photo['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
            $photoName = $this->createImage($photo, 'media');
        } else {
            $_SESSION['flash'] = 'Tipo de imagem não suportada';
            $this->redirect('/handbags/insert');
        }

        HandbagHandler::insertHandbag($name, $price, $rate, $category, $photoName);

        $this->redirect('/handbags/insert');

    }

    private function createImage($photo, $folder) {
        list($widthOrig, $heightOrig) = getimagesize($photo['tmp_name']);

        $finalImage = imagecreatetruecolor($widthOrig, $heightOrig);

        $image = imagecreatefrompng($photo['tmp_name']);

        imagecopyresampled(
            $finalImage, $image,
            0, 0, 0, 0,
            $widthOrig, $heightOrig, $widthOrig, $heightOrig
        );

        $fileName = md5(time().rand(0,9999)).'.png';

        imagepng($finalImage, $folder.'/'.$fileName);

        return $fileName;
    }

    public function product($atts = []) {
        $id = $atts['id'];

        $handbag = HandbagHandler::selectById($id);

        $this->render('handbag', ['handbag' => $handbag]);
    }
}