<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ACS</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css"/>
    <link rel="stylesheet" href="/libs/css/main.css"/>

</head><!--/head-->

<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/main">ACS</a>
        </div>

        <p  class="navbar-text navbar-right" style="margin-right: 1%">
            <?php
            $vyhod = "<a href=\"/logout\"> Выйти </a>";
            if (isset($_SESSION['user'])) {echo  "Авторизован как  " . $_SESSION['username'] . " " . $_SESSION['userfam'] . " " . $vyhod;}?></p>
        <?php if (isset($_SESSION['user'])) {echo "<a class=\"navbar-text navbar-right\" href=\"/messages/" . $_SESSION['user'] .  "\">Сообщения</a>
        <a class=\"navbar-text navbar-right\" href=\"/spravochnik\">Справочник</a>
        <a class=\"navbar-text navbar-right\" href=\"/feed\">Лента</a>";} ?>
    </div>
</nav>
</div>