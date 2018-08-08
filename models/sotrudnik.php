<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 15.05.2018
 * Time: 19:16
 */
include_once '/libs/connect.php';
session_start();

class sotrudnik{
    public static function GetSpisok(){ //Получение списка сотрудников
        $db = connect::getDB();
        $sql = "SELECT * FROM USERS";
        $result = $db->query($sql);
        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['Name'] = $row['Name'];
            $categoryList[$i]['Fam'] = $row['Fam'];
            $categoryList[$i]['Otch'] = $row['Otch'];
            $categoryList[$i]['Otdel'] = $row['Otdel'];
            $categoryList[$i]['User_ID'] = $row['User_ID'];
            $categoryList[$i]['Info'] = $row['Info'];
            $categoryList[$i]['Photo_path'] = $row['Photo_path'];
            $i++;
        }
        return $categoryList;
    }
}