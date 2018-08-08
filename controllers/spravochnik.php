<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 15.05.2018
 * Time: 19:16
 */

include '/models/sotrudnik.php';
class spravochnik{

    public static function spisok(){
    $results = sotrudnik::GetSpisok();
    include '/views/spravochnik.php';

    }
}