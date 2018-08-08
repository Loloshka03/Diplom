<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 16.05.2018
 * Time: 4:24
 */
session_start();
include_once '/models/lenta.php';
class posts{
    public static function view($idPost){
        $postInfo = lenta::getFeedById($idPost);
        $comments = lenta::getCommentById($idPost);
        include_once '/views/postView.php';
    }
    public static function writeComment(){
        $name = $_SESSION['user'];
        $page_id = $_POST["page_id"];
        $text_comment = $_POST["text_comment"];
        $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
        $text_comment = htmlspecialchars($text_comment);
        lenta::saveComment($name,$page_id,$text_comment);
    }

}