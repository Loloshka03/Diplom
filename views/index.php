<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: /login');
}
include '/views/templates/header.php';

?>


<h1>Добро пожаловать на главную страницу ACS</h1>

<?php include '/views/templates/footer.php';?>
