<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 07.06.2018
 * Time: 15:48
 */
include_once '/newView/templates/header.php';
include_once '/models/user.php';
?>
<div id="page-contents">
    <div class="container">
        <div class="row">

            <!-- Newsfeed Common Side Bar Left
            ================================================= -->
            <div class="col-md-3 static">
                <div class="profile-card">
                    <img src="/files/users/<?php echo user::getPhotoPath($_SESSION['user'])?>" alt="user" class="profile-photo" />
                    <h5><a href="timeline.html" class="text-white"><?php echo user::getNameFam($_SESSION['user'])?></a></h5>
                </div><!--profile card ends-->
                <ul class="nav-news-feed">
                    <li><div><a href="/addpost">Добавить новость</a></div></li>
                    <li><div><a href="/spravochnik">Сотрудники</a></div></li>
                    <li><div><a href="/messages/<?php echo $_SESSION['user']?>">Сообщения</a></div></li>
                    <li><div><a href="/logout">Выход</a></div></li>
                    </ul><!--news-feed links ends-->
            </div>

            <div class="col-md-7">

                <?php
                        foreach($feedList as $feed) {
                            $comments = lenta::getCommentById($feed['ID_Post']);
                            $photo = user::getPhotoPath($feed['User_ID']);
                            echo "<div class=\"post-content\">
                    <img src=\"/files/feed/" . $feed['Preview_img'] . "\" alt=\"post-image\" class=\"img-responsive post-image\" />
                    <div class=\"post-container\">
                        <img src=\"/files/users/" . $photo . "\" alt=\"user\" class=\"profile-photo-md pull-left\" />
                        <div class=\"post-detail\">
                            <div class=\"user-info\">
                                <h5><a href=\"\" class=\"profile-link\">" . user::getNameFam($feed['User_ID']) . "</a></h5>
                                <p class=\"text-muted\">Published a photo about 3 mins ago</p>
                            </div>
                            <div class=\"line-divider\"></div>
                            <div class=\"post-text\">
                                <p><b>" . $feed['Text'] . "</b></p>
                            </div>
                            <div class=\"line-divider\"></div>";
                            foreach ($comments as $comment){
                                echo "<div class=\"post-comment\">
                                <img src=\"/files/users/" . user::getPhotoPath($comment['User_ID']) . "\" alt=\"\" class=\"profile-photo-sm\" />
                                <p><a href=\"timeline.html\" class=\"profile-link\">" . user::getNameFam($comment['User_ID']) ."</a> " . $comment['Text_Comment'] . "</p>
                            </div>";
                            }

                            echo "
                            <form name=\"comment\" action=\"/postComment\" method=\"post\">
                            <div class=\"post-comment\">
                                <img src=\"/files/users/" . user::getPhotoPath($_SESSION['user']) . "\" alt=\"\" class=\"profile-photo-sm\" />
                                <input type=\"text\" class=\"form-control\" name='text_comment' placeholder=\"Post a comment\">
                                <input type='hidden' name='page_id' value='" . $feed['ID_Post'] ."'/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
";

                        }
                ?>


                <!-- Post Content
                ================================================= -->

        </div>
    </div>
   <?php include_once '/newView/templates/footer.php'; ?>
