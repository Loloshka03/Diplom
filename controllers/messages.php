<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 17.05.2018
 * Time: 8:39
 */
include_once '/models/soobsheniya.php';
include_once '/models/user.php';
class Messages
{
    public static function Show($ID) //Показ страницы
    {
        $sobesednik = $ID;
        include '/views/messages.php';
    }

    public static function sendMessageData($to) //Отправка сообщения
    {
        $from = $_SESSION['user'];
        $to = $to;
        $text_message = $_POST["mess"];
        soobsheniya::sendMessage($from, $to, $text_message);
    }

    public static function getMessages($id) //Получение сообщений
    {
        if ($id == $_SESSION['user']){
            echo "Выберите диалог";
        }
        else {
            $result = soobsheniya::getMessages($id);
            while ($row = $result->fetch()) {
                echo "<li class=\"me\">
                        <div class=\"name\">
                            <span class=\"\">" . user::getNameFam($row['otpr']) . "</span>
                        </div>
                        <div class=\"message\">
                            <p>" . $row['text'] . "</p>
                        </div>
                    </li>";
            }
        }
    }

    public static function getDialogs() //Получение списка диалогов
    {
        $result = soobsheniya::getDialogs($_SESSION['user']);
        while ($row = $result->fetch()) {
            if ($row['otpr']!= $_SESSION['user'])
            echo "<li><a href=\"". $row['otpr'] ."\"><span>" . user::getNameFam($row['otpr']) . "</span></a></li>";

        }
    }
}