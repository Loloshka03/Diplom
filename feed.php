<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 16.05.2018
 * Time: 3:04
 */
include '/views/templates/header.php'; ?>
   <div class="row">
        <?php foreach($feedList as $feed) echo "<div class=\"media news\">
            <a class=\"pull-left\" href=\"#\">
                <img width=\"256\" height=\"256\" class=\"media-object\" src=\"/files/icons/message.png\" alt=\"bl\">
            </a>
            <div class=\"media-body\">
                <h2 class=\"media-heading\">" . $feed['Title'] ."</h2>" .
                $feed['Preview_text'] .
              "<a href=\"" . "/view/" . $feed['ID_Post'] ."\"><button class=\"btn info\" style=\"margin-left: 89%; margin-top: 5%; margin-bottom: 1%\">Читать</button></a>
            </div>
        </div>"; ?>
    </div>


<?php include '/views/templates/footer.php';?>