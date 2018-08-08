<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 14.05.2018
 * Time: 16:35
 */
include "models/user.php";
include_once '/models/lenta.php';
class site{
    public static function index(){
        if ($_SESSION['user']) {
            $isadmin = user::isAdmin($_SESSION['user']); //Проверка на администратора
            if ($isadmin == true) {
                include '/views/admin.php'; //Открытие админпанели
            } else {
                $Actions = lenta::getActivity();
                include '/newView/index.php'; //Открытие профиля пользователя
            }
        }
        else{
            header('Location: /login');
        }
    }

}