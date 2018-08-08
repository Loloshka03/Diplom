<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 16.05.2018
 * Time: 2:45
 */
include_once '/models/lenta.php';
class feed{
    public static function show(){
        $feedList = lenta::getFeed(); //Получение массива новостей

        include_once '/newView/feed.php'; //Подключение внешнего вида
    }


}