<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 08.05.2018
 * Time: 16:44
 */
class connect
{
    public static function getDB(){

        /*$user = "root";
        $pass = "1234";
        $db = new PDO('mysql:host=:127.0.0.1;dbname=auth', "root", "1234");
        return $db;*/
        $paramsPath = '/libs/db_params.php';
        $params = include($paramsPath);

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        // Задаем кодировку
        $db->exec("set names utf8");

        return $db;    }
}