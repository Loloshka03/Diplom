<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 17.05.2018
 * Time: 8:38
 */
include_once "/libs/connect.php";
session_start();
class soobsheniya{
   public static function getMessages($id){ //Получение сообщений для определенного пользователя
       $db = connect::getDB();
       $sql = "SELECT * FROM `messages` WHERE `otpr`= :otpr and User_ID = :User_ID or `otpr`=:User_ID and User_ID = :otpr ORDER by `ID_Message` ";
       $result = $db->prepare($sql);
       $result->bindParam(':otpr', $id, PDO::PARAM_INT);
       $result->bindParam(':User_ID', $_SESSION['user'], PDO::PARAM_INT);
       $result->execute();
       return $result;
   }
    public static function sendMessage($from, $to, $text){ //Запись сообщений в базу
        $db = connect::getDB();
        $sql = "INSERT INTO messages (otpr, text, User_ID) VALUES (:otpr, :text, :User_ID)";
        $result = $db->prepare($sql);
        $result->bindParam(':otpr', $from, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_INT);
        $result->bindParam(':User_ID', $to, PDO::PARAM_INT);
        $result->execute();
        header("Location: ".$_SERVER["HTTP_REFERER"]);
}
    public static function getDialogs($id){ //Получение списка диалогов

           $db = connect::getDB();
           $sql = "SELECT DISTINCT * FROM `messages` WHERE otpr = :otpr or User_ID = :otpr";
           $result = $db->prepare($sql);
           $result->bindParam(':otpr', $id, PDO::PARAM_INT);
           $result->execute();
           return $result;
       }


}