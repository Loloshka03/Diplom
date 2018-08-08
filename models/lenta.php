<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 16.05.2018
 * Time: 2:44
 */
include_once '/libs/connect.php';
class lenta{
    public static function getFeed(){ //получение из базы массива новостей
        $db = connect::getDB();
        $sql = "SELECT * FROM FEED order by ID_Post desc ";
        $result = $db->query($sql);
        $i = 0;
        $feedList = array();
        while ($row = $result->fetch()) {
            $feedList[$i]['ID_Post'] = $row['ID_Post'];
            $feedList[$i]['Title'] = $row['Title'];
            $feedList[$i]['Preview_text'] = $row['Preview_text'];
            $feedList[$i]['Preview_img'] = $row['Preview_img'];
            $feedList[$i]['Text'] = $row['Text'];
            $feedList[$i]['User_ID'] = $row['User_ID'];
            $i++;
        }
            return $feedList;

    }
    public static function getActivity(){
        $db = connect::getDB(); //Получение постов определенного пользователя
        $sql = "SELECT * FROM FEED where User_ID ='" . $_SESSION['user'] . "'";
        $result = $db->query($sql);
        $i = 0;
        $feedList = array();
        while ($row = $result->fetch()) {
            $feedList[$i]['ID_Post'] = $row['ID_Post'];
            $feedList[$i]['Title'] = $row['Title'];
            $feedList[$i]['Preview_text'] = $row['Preview_text'];
            $feedList[$i]['Preview_img'] = $row['Preview_img'];
            $feedList[$i]['Text'] = $row['Text'];
            $i++;
        }
        return $feedList;

    }
    public static function getFeedByID($idPost){
        $db = connect::getDB();
        $sql = 'SELECT * FROM Feed WHERE ID_Post = :postid';
        $result = $db->prepare($sql);
        $result->bindParam(':postid', $idPost, PDO::PARAM_INT);
        $result->execute();
        $postparams = $result->fetch();
        if ($postparams){
            $feedList['Title'] = $postparams['Title'];
            $feedList['Preview_text'] = $postparams['Preview_text'];
            $feedList['Preview_img'] = $postparams['Preview_img'];
            $feedList['Text'] = $postparams['Text'];
            $feedList['User_ID'] = $postparams['User_ID'];
            return $postparams;
        }
    }
    public static function saveComment($name,$page_id,$text_comment){ //Сохранение комментария в базе
        $db = connect::getDB();
        $sql = "INSERT INTO comments (User_ID, Post_ID, Text_Comment) VALUES (:User_ID, :Post_ID, :Text_Comment)";
        $result = $db->prepare($sql);
        $result->bindParam(':User_ID', $name, PDO::PARAM_INT);
        $result->bindParam(':Post_ID', $page_id, PDO::PARAM_INT);
        $result->bindParam(':Text_Comment', $text_comment, PDO::PARAM_INT);
        $result->execute();
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
    public static function getCommentById($IDPage){ //Получение комментариев к определенной записи
        $db = connect::getDB();
        $sql = "SELECT * FROM COMMENTS where Post_ID = :postid";
        $result = $db->prepare($sql);
        $result->bindParam(':postid', $IDPage, PDO::PARAM_INT);
        $result->execute();
        $i=0;
        $comments = array();
        while ($row = $result->fetch()){
            $comments[$i]['ID_Comment'] = $row['ID_Comment'];
            $comments[$i]['User_ID'] = $row['User_ID'];
            $comments[$i]['Text_Comment'] = $row['Text_Comment'];
            $i++;
        }
        return $comments;

    }
    public static function writePost($title, $preview_Text, $preview_img, $text, $user_ID){ //Запись новости в базу данных
        $db = connect::getDB();
        $sql = "INSERT INTO feed (Title, Preview_Text, Preview_img, Text, User_ID) VALUES (:title, :preview_Text, :preview_img, :text, :user_ID)";
        $result = $db->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_INT);
        $result->bindParam(':preview_Text', $preview_Text, PDO::PARAM_INT);
        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/files/feed/" . self::str2url($title) . ".jpg");
        }
        $imgpath =  self::str2url($title) . ".jpg";
        $result->bindParam(':preview_img', $imgpath, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_INT);
        $result->bindParam(':user_ID', $user_ID, PDO::PARAM_INT);
        $result->execute();
        header("Location: /feed");
    }

    function rus2translit($string) { //Перевод русских букв в английские(Для нащвания картинок к статье)
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
