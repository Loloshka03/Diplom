<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 17.05.2018
 * Time: 10:00
 */
include_once '/models/lenta.php';
session_start();
class addpost{
    public static function show(){
        include "/views/addpost.php";
    }
    public static function postAdd(){
        $title = $_POST['name'];
        $preview_img = $_POST['Prewiew_img'];
        $preview_Text = $_POST['Preview_Text'];
        $text = $_POST['text'];
        lenta::writePost("", "", $preview_img, $text, $_SESSION['user']);
    }
}