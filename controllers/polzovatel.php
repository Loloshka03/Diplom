<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 04.06.2018
 * Time: 6:12
 */
include_once '/models/user.php';
class polzovatel{
    public static function addPolz(){
        user::addUser($_POST['login'],$_POST['pass'],$_POST['name'], $_POST['fam'], $_POST['otch'], $_POST['otdel'], $_POST['info']);
    }

}