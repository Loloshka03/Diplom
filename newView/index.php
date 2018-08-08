<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 07.06.2018
 * Time: 3:21
 */
include_once '/newView/templates/header.php';
include_once '/models/user.php';
include_once '/models/lenta.php'?>
<!-- Timeline
      ================================================= -->
<div class="timeline">
    <div class="timeline-cover">

        <!--Timeline Menu for Large Screens-->
        <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
                <div class="col-md-3">
                    <div class="profile-info">
                        <img src="/files/users/<?php echo user::getPhotoPath($_SESSION['user'])?>" alt="" class="img-responsive profile-photo" />
                        <h3><?php echo user::getNameFam($_SESSION['user'])?></h3>
                        <p class="text-muted"><?php echo $_SESSION['userotdel'] ?></p>
                    </div>
                </div>

            </div>
        </div><!--Timeline Menu for Large Screens End-->

        <!--Timeline Menu for Small Screens-->
        <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
                <img src="/files/users/<?php echo user::getPhotoPath($_SESSION['user'])?>" alt="" class="img-responsive profile-photo" />
                <h4>Sarah Cruiz</h4>
                <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
                <ul class="list-inline">
                    <li><a href="timline.html" class="active">Timeline</a></li>
                    <li><a href="timeline-about.html">About</a></li>
                    <li><a href="timeline-album.html">Album</a></li>
                    <li><a href="timeline-friends.html">Friends</a></li>
                </ul>
                <button class="btn-primary">Add Friend</button>
            </div>
        </div><!--Timeline Menu for Small Screens End-->

    </div>
    <div id="page-contents">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

                <?php foreach ($Actions as $Action){
                    $comments = lenta::getCommentById($Action['ID_Post']);
                    echo "<div class=\"post-content\">

                    <!--Post Date-->
                    <div class=\"post-date hidden-xs hidden-sm\">
                        <h5>" . user::getNameFam($_SESSION['user']) . "</h5>
                        <p class=\"text-grey\">Sometimes ago</p>
                    </div><!--Post Date End-->

                    <img src=\"/files/feed/" . $Action['Preview_img'] . "\" alt=\"post-image\" class=\"img-responsive post-image\" />
                    <div class=\"post-container\">
                        <img src=\"/files/users/" . user::getPhotoPath($_SESSION['user']) . "\" alt=\"user\" class=\"profile-photo-md pull-left\" />
                        <div class=\"post-detail\">
                            <div class=\"user-info\">
                                <h5><a href=\"timeline.html\" class=\"profile-link\">". user::getNameFam($_SESSION['user']) ."</a></h5>
                                <p class=\"text-muted\">Published a photo about 15 mins ago</p>
                            </div>
                            <div class=\"line-divider\"></div>
                            <div class=\"post-text\">
                                <p><b>" . $Action['Text'] . "</b></p>
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
                                <input type='hidden' name='page_id' value='" . $Action['ID_Post'] ."'/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
";
                } ?>

            </div>

        </div>
    </div>
</div>
</div>


<?php include_once '/newView/templates/footer.php';?>
