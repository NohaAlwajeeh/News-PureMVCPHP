<div class="sidebar">
    <div class="widget">
        <div class="banner-spot clearfix">
           <center><h2 >Votes</h2>
            <div class="banner-img">


                   <?php foreach ($vote as $row){
                     echo '<label >'.$row->vote_question.'?</label>';
                     $option=explode(',',$row->vote_options);

                     echo' <form action="'.$_SERVER['PHP_SELF'].'">';
                     $i=0;
  foreach ($option as $opt)
                    {

?><div class="radio">
                        <input type="radio" name="user_vote" <?=$row->vote_options==$opt ? "checked" : ""?> value="<?php echo $row->vote_options?>">
                        <?php echo '<label>'.$opt.'</label>';?>
                        </div>
                <?php
                   }
                       }?>


            </center>
            </div><!-- end banner-img -->
        </div><!-- end banner -->
    </div><!-- end widget -->
    <div class="widget">
        <h2 class="widget-title">Popular Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                <a href="tech-single.php" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <?php foreach ($post as $row){ ?>
                        <img src="admin/uploads/images/<?php echo $row->post_img; ?>" alt=""
                             class="img-fluid float-left">
                        <h5 class="mb-1"><?php echo substr($row->post_intro, 0, 20); ?></h5>
                        <small><?php echo $row->publish_date;?>
                        </small>
                    </div>
                    <?php  }?>
                </a>




            </div>

        </div><!-- end blog-list -->
    </div><!-- end widget -->



    <div class="widget">
        <h2 class="widget-title">Follow Us</h2>

        <div class="row text-center">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button facebook-button">
                    <i class="fa fa-facebook"></i>
                    <p>27k</p>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button twitter-button">
                    <i class="fa fa-twitter"></i>
                    <p>98k</p>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button google-button">
                    <i class="fa fa-google-plus"></i>
                    <p>17k</p>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button youtube-button">
                    <i class="fa fa-youtube"></i>
                    <p>22k</p>
                </a>
            </div>
        </div>
    </div><!-- end widget -->


</div><!-- end sidebar -->
