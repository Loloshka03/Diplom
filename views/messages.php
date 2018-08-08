<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 17.05.2018
 * Time: 8:49
 */
include_once '/newView/templates/header.php';
include_once '/models/user.php';
?>

    <!-- Стили для блока с сообщениями!-->
    <link rel="stylesheet" href="/libs/css/chatstyle.css"/>
    <!--Подключаем Jquery!-->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
        //Загружаем библиотеку JQuery
        google.load("jquery", "1.3.2");
        google.load("jqueryui", "1.7.2");
        //Функция отправки сообщения
        function send()
        {

            //Считываем сообщение из поля ввода с id mess_to_add
            var mess=$("#mess_to_send").val();
            // Отсылаем паметры
            $.ajax({
                type: "POST",
                url: "/sendMessage/<?php echo $sobesednik?>",
                data:"mess="+mess,
                // Выводим то что вернул PHP
                success: function(html)
                {
                    //Если все успешно, загружаем сообщения
                    load_messes();
                    //Очищаем форму ввода сообщения
                    $("#mess_to_send").val('');
                }
            });
        }
        //Функция загрузки сообщений
        function load_messes()
        {
            $.ajax({
                type: "POST",
                url:  "/getMessages/<?php echo $sobesednik ?>",
                data: "req=ok",
                // Выводим то что вернул PHP
                success: function(html)
                {
                    //Очищаем форму ввода
                    $("#messages").empty();
                    //Выводим что вернул нам php
                    $("#messages").append(html);
                    //Прокручиваем блок вниз(если сообщений много)
                    $("#messages").scrollTop(90000);
                }
            });
        }
        function load_dialogs()
        {

            $.ajax({
                type: "POST",
                url:  "/getDialogs",
                data: "req=ok",
                // Выводим то что вернул PHP
                success: function(html)
                {
                    //Очищаем форму ввода
                    $("#dialogs").empty();
                    //Выводим что вернул нам php
                    $("#dialogs").append(html);
                    //Прокручиваем блок вниз(если сообщений много)
                    $("#dialogs").scrollTop(90000);
                }
            });
        }
    </script>
<!--
    <table>
        <tr>
            <td>
                <div id="messages">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <form action="javascript:send();">
                    <input type="text" id="mess_to_send">
                    <input type="button" value="Отправить" onclick="send()">
                </form>
            </td>
        </tr>
    </table>
    -->
        <div class="window-title">
            <div class="dots">
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
            </div>
            <div class="title">
                <span>Окно чата</span>
            </div>
            <div class="expand">
                <i class="fa fa-expand"></i>
            </div>
        </div>
        <div class="window-area">
            <div class="conversation-list">
                <ul id="dialogs">

                </ul>
                <div class="my-account">
                    <div class="image">
                        <img src="/files/users/<?php echo user::getPhotoPath($_SESSION['user'])?>">
                    </div>
                    <div class="name">
                        <span><?php echo user::getNameFam($_SESSION['user'])?></span>
                        </div>

                </div>
            </div>
            <div class="chat-area">
                <div class="title"><b><?php echo user::getNameFam($sobesednik)?></b><i class="fa fa-search"></i></div>
                <div class="chat-list">
                    <ul id="messages">

                    </ul>
                </div>
                <form action="javascript:send();" class="input-area">
                    <div  class="input-wrapper">
                        <input   type="text" id="mess_to_send">
                    </div>
                    <input type="button" value="Отправить" onclick="send()" class="send-btn">
                </form>
        </div>
    </div>
    <script>
        //При загрузке страницы подгружаем сообщения
        load_messes();
        load_dialogs();
        //Ставим цикл на каждые три секунды
        setInterval(load_messes,3000);
    </script>
<?php include '/newView/templates/footer.php'; ?>