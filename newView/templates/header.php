<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 07.06.2018
 * Time: 3:17
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>My Timeline | This is My Coolest Profile</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="/libs/css/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/libs/css/css/style.css" />
    <link rel="stylesheet" href="/libs/css/css/ionicons.min.css" />
    <link rel="stylesheet" href="/libs/css/css/font-awesome.min.css" />
    <link href="/libs/css/css/emoji.css" rel="stylesheet">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
</head>
<body>

<!-- Header
    ================================================= -->
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><p>ACS</p></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown" ><a href="/main">Профиль</a></li>
                    <li class="dropdown" ><a href="/feed">Лента</a></li>
                    <li class="dropdown" ><a href="/messages/<?php echo $_SESSION['user'] ?>">Сообщения</a></li>
                    <li class="dropdown" ><a href="/spravochnik">Сотрудники</a></li>
                    <li class="dropdown" ><a href="/logout">Выход</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->
