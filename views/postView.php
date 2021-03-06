<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 16.05.2018
 * Time: 4:41
 */
include '/templates/header.php';
//echo "Эта страница статьи"
?>
<!-- Start Posts Container -->
<div class="col-2-3" id="post-container">
    <div class="wrap-col">


        <link rel='stylesheet' id='style-css'  href='/libs/css/feed/style.css' type='text/css' media='all' />
        <!-- Start Post Item -->
        <div class="post">
            <div class="post-margin">

                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                </div>

                <h4><?php echo $postInfo['Title']; ?></h4>
                <div class="clear"></div>
            </div>

            <div class="featured-image">
                <img src="/files/feed/<?php echo $postInfo['Preview_img'] ?>" class="attachment-post-standard "  />
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>

            <div class="post-margin">
                <p><?php echo $postInfo['Text']; ?></p>

            </div>


            <div class="clear"></div>
        </div>
    </div>



    <div class="clear"></div>
</div>
</div>
<!-- End Posts Container -->

<div class="clear"></div>
</div>
<!-- End Main Container -->


<!-- End Footer -->


<?php include 'comments.php' ;
include '/templates/footer.php';
?>
