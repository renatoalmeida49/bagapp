<?php
namespace src\handlers;

use src\models\User;

class UserHandler {

    // USED TO CHECK IF THERE IS AN USER LOGGED IN THE SYSTEM
    public static function checkLogin() {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();

            if (count($data) > 0) {

                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->name = $data['name'];
                $loggedUser->email = $data['email'];
                
                return $loggedUser;
            }
        }

        return false;
    }

    // USED TO LOG THE USER IN. RETURNS A NEW TOKEN
    public static function verifyLogin($email, $password) {
        $user = User::select()->where('email', $email)->one();

        if($user) {
            if(password_verify($password, $user['password'])) {
                $token = md5(time().rand(0,9999).time());

                User::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();

                return $token;
            }
        }

        return false;
    }

    // VERIFY IF THERE IS AN EMAIL WHEN A NEW ACCOUNT ARE TO BE CREATED
    public static function emailExists($email) {
        $user = User::select()->where('email', $email)->one();
        return $user ? true : false;
    }

    // CREATE A NEW USER IN DATABASE
    public static function insertUser($name, $email, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

        User::insert([
            'name' => $name,
            'email' => $email,
            'password' => $hash,
            'token' => $token
        ])->execute();

        return $token;
    }
}