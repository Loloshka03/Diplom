<?php
include_once '/models/user.php'
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 16.05.2018
 * Time: 4:53
 */
//foreach ($comments as $comment){
  //  echo "<br/>" . $comment['Text_Comment'];
//}
?>
<!--<form name="comment" action="/postComment" method="post">
    <p>
        <label>Имя:</label>
        <input type="text" name="name" />
    </p>
    <p>
        <label>Комментарий:</label>
        <br />
        <textarea name="text_comment" cols="30" rows="50"></textarea>
    </p>
    <p>
        <input type="hidden" name="page_id" value="1" />
        <input type="submit" value="Отправить" />
    </p>
</form> -->
<!-- Comments -->
<div class="comment-container">
    <ul class="comment-list">

        <?php
        foreach ($comments as $comment) {
            echo "<li class=\"me\">
            <div class=\"name\">
                <!--<img src=\"/files/icons/message.png\" width=\"64\" height=\"64\">-->
                <h4>" . user::getNameFam($comment['User_ID']) . "</h4>
                <p>" . $comment['Text_Comment'] . "</p>
            </div>
        </li>
    ";
        }
?>
    </ul>

    <!-- Comment Form -->
    <div class="commen-form">
        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel Reply</a></small></h3>
            <form name="comment" action="/postComment" method="post" class="comment-form">
                <p class="comment-notes"></p>
                <textarea name="text_comment" placeholder="Enter Message Here" class="comment-text-area"></textarea>						<p class="form-allowed-tags"></p>						<p class="form-submit">
                    <input name="submit" type="submit" id="comment-submit" value="Отправить" />
                    <input type='hidden' name='page_id' value='<?php echo $postInfo['ID_Post'] ?>'/>
                </p>
            </form>
        </div><!-- #respond -->
        <div class="clear"></div>
        </form>
    </div>
    <!-- End Comment Form -->

</div>
<!-- End Comments -->
