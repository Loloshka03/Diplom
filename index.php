<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 08.05.2018
 * Time: 12:31
 */
include_once '/libs/router.php';
include '/controllers/site.php';
if ($_SERVER['REQUEST_URI'] == '/'){
    site::index();
}
$router = new router();
$router->run();