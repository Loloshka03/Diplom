<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 16.05.2018
 * Time: 1:57
 */
include '/newView/templates/header.php';
?>
<br/>
<br/>
<link rel="stylesheet" href="/libs/css/main.css"/>
<div class="row">
    <?php
    foreach ($results as $result){
        echo "<div class=\"col-sm-6 col-md-2 card\">
    <div class=\"thumbnail\">
        <img height=\"300\" width=\"300\"  src=\"/files/users/" . $result['Photo_path'] . "\" alt=\"sss\"/>
        <div class=\"caption\">
            <h3>" . $result['Name'] . " " . $result['Fam'] . "</h3>
            <p>" . $result['Info'] . "</p>
            <p><a href=\"/messages/" . $result['User_ID'] . "\" class=\"btn btn-primary\" role=\"button\" >Сообщение</a>
        </div>
    </div>
</div>";
    }
    ?>
</div>
<?php include '/newView/templates/footer.php';?>
