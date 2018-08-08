<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 17.05.2018
 * Time: 9:53
 */
?>
<form name="comment" action="/posting" method="post" enctype="multipart/form-data">
    <!--<p>
        <label>Название статьи:</label>
        <input type="text" name="name" />
    </p>
    <p>
        <label>Аннотация:</label>
        <input type="text" name="Preview_Text" />
    </p>-->
    <p>
        <label>Путь до превью:</label>
        <input type="file" name="image" placeholder="" value="">
    </p>
    <p>
        <label>Текст:</label>
        <br />
        <textarea name="text" cols="30" rows="50"></textarea>
    </p>
    <p>
        <input type="hidden" name="page_id" value="1" />
        <input type="submit" value="Отправить" />
    </p>
</form>
