<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 09.05.2018
 * Time: 18:42
 */



class login{
    public function __construct()
    {
        include_once '/models/user.php';
    }

    function auth(){
        $login = false;
        $pass = false;

        if (isset($_POST['sumbit'])) {

            $login = $_POST['login'];
            $pass = $_POST['password'];
            $userId = User::checkUserData($login, $pass);
            if ($userId == false){
                echo "Неверный логин или пароль";
            }
            else{
                user::auth($userId);
                header("Location: /main");
            }
        }
        include '/views/login.php';


    }

    function logout(){
        session_start();

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);

        // Перенаправляем пользователя на главную страницу
        header("Location: /login");
    }


}