<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 12.05.2018
 * Time: 3:37
 */
include_once '/libs/connect.php';
session_start();
class user
{

    public static function checkUserData($email, $password) //Проверка данных пользователя
    {
        $db = connect::getDB();
        $sql = 'SELECT * FROM Logins WHERE Login = :email AND Pass = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['ID_User'];
        }
        else{
            return false;
        }
        return false;
    }
    public static function auth($userID){ //Авторизация пользователя
        $db = connect::getDB();

        $_SESSION['user'] = $userID;
        user::getUserInfo();
    }
    public static function getUserInfo(){ //Получение информации об определенном пользователе
        $db = connect::getDB();
        $sql = 'SELECT * FROM Users WHERE User_ID = :userid';
        $result = $db->prepare($sql);
        $result->bindParam(':userid', $_SESSION['user'], PDO::PARAM_INT);
        $result->execute();
        $userparams = $result->fetch();
        if ($userparams){
            $_SESSION['username'] = $userparams['Name'];
            $_SESSION['userfam'] = $userparams['Fam'];
            $_SESSION['userotch'] = $userparams['Otch'];
            $_SESSION['userotdel'] = $userparams['Otdel'];
            $_SESSION['userinfo'] = $userparams['Info'];
            $_SESSION['userphoto'] = $userparams['Photo_path'];
        }
    }
    public static function getNameFam($ID){ //Получение имени и фамилии пользователя
        $db = connect::getDB();
        $sql = 'SELECT name, fam FROM Users WHERE User_ID = :userid';
        $result = $db->prepare($sql);
        $result->bindParam(':userid', $ID, PDO::PARAM_INT);
        $result->execute();
        $userparams = $result->fetch();
        if ($userparams) {
            return $fio = $userparams['name'] . " " . $userparams['fam'];
        }

    }
    public static function getPhotoPath($ID){ //Получение имени аватара пользователя
        $db = connect::getDB();
        $sql = 'SELECT Photo_path FROM Users WHERE User_ID = :userid';
        $result = $db->prepare($sql);
        $result->bindParam(':userid', $ID, PDO::PARAM_INT);
        $result->execute();
        $userparams = $result->fetch();
        if ($userparams) {
            return $Photo_path = $userparams['Photo_path'];
        }
    }

    public static function isAdmin($userID){ //Проверка на проава пользователя
        $db = connect::getDB();
        $sql = 'SELECT IsAdmin FROM Logins WHERE ID_User = :userid';
        $result = $db->prepare($sql);
        $result->bindParam(':userid', $_SESSION['user'], PDO::PARAM_INT);
        $result->execute();
        $userparams = $result->fetch();
        if ($userparams['IsAdmin'] == 1) {
            return true;
        }
        else{
            return false;
        }

    }

    public static function addUser($login, $pass, $name,$fam,$otch,$otdel,$info){ //Добавление пользователя
        $db = connect::getDB();
        $sql = "INSERT INTO Logins (Login, Pass, IsAdmin) VALUES (:login, :pass, '0')";
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_INT);
        $result->bindParam(':pass', $pass, PDO::PARAM_INT);
        $result->execute();
        $sql = "SELECT ID_User FROM Logins WHERE Login = :login";
        $check = $db->prepare($sql);
        $check->bindParam(':login', $login, PDO::PARAM_INT);
        $check->execute();
        $newUserID = $check->fetch();
        if ($newUserID['ID_User']!='') {
            $sql = "INSERT INTO users (Name, Fam, Otch, Otdel, User_ID, Info, Photo_path) VALUES (:Name, :Fam, :Otch, :Otdel, :User_ID, :Info, :Photo_path)";
            $result = $db->prepare($sql);
            $result->bindParam(':Name', $name, PDO::PARAM_INT);
            $result->bindParam(':Fam', $fam, PDO::PARAM_INT);
            $result->bindParam(':Otch', $otch, PDO::PARAM_INT);
            $result->bindParam(':Otdel', $otdel, PDO::PARAM_INT);
            $result->bindParam(':User_ID', $newUserID['ID_User'], PDO::PARAM_INT);
            $result->bindParam(':Info', $info, PDO::PARAM_INT);
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/files/users/" . self::str2url($login) . "profilephoto.jpg");
            }
            $imgpath = self::str2url($login) . "profilephoto.jpg";
            $result->bindParam(':Photo_path', $imgpath, PDO::PARAM_INT);
            $result->execute();
        }
        header("Location: /main");
    }
    function rus2translit($string) { //Транслитерация
        $converter = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        );
        return strtr($string, $converter);
    }
    function str2url($str) {
        // переводим в транслит
        $str = self::rus2translit($str);
        // в нижний регистр
        $str = strtolower($str);
        // заменям все ненужное нам на "-"
        $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
        // удаляем начальные и конечные '-'
        $str = trim($str, "-");
        return $str;
    }
}