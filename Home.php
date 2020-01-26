<?php include 'header.php';
include 'controller/categories_controller.php';
include 'controller/posts_controller.php';
include 'controller/breaking_news_controller.php';
include 'controller/votes_controller.php';
$getCate=new categoriesController();
$cate=$getCate->getCategory();
$getpost=new PostsController();
$post=$getpost->SELECTTHELASTNEWS();
$Break=new BreakNewsController();
$BreakNews=$Break->getBreakNews();
$votes=new VotesController();
$vote=$votes->getVotes();

?>
<body>

    <div id="wrapper">
<?php include 'navbar.php';?>



        <section class="section first-section">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    foreach ($post as $row){
                        echo '   <div class="masonry-blog clearfix col-md-6">
                    <div class="first-slot " >   
                    <div class="masonry-box post-media new-size">
                             <img src="admin/uploads/images/'.$row->post_img. '" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                    
                                        <span class="bg-orange"><a href="tech-category-01.php" title=""></a>' .$row->post_intro. '</span>
                                        <h4><a href="tech-single.php" title="">' .$row->post_intro. '</a></h4>
                                        <small><a href="tech-single.php" title="">' .$row->publish_date.'</a></small>
                                        
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                            </div><!-- end first-side -->



       </div>';
                    }?>
                    <!-- end masonry -->
                </div>
                </div>




            <div class="media">
                <img src="images/version/download.jfif" class="clip-animation imga" >
                <marquee direction="left" class="marq">
                       <?php
                       foreach ($BreakNews as $break){
                           if(date('Y-m-d')==$break->start_date&&date('Y-m-d')<=$break->end_date)
                           echo $break->break_content;
                       }
                       ?></marquee>

            </div>


        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Fresh News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                         <?php foreach ($post as $row){
                             echo'   <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.php" title="">

                                                <img src="admin/uploads/images/'. $row->post_img.'" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.php" title="">'. $row->post_intro .'</a></h4>
                                        <p>'.substr( $row->post_title , 0, 100).'<a href="tech-single.php">Read More</a>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.php" title="">Gadgets</a></small>
                                        <small><a href="tech-single.php" title="">'. $row->publish_date.'</a></small>

                                        <small><a href="tech-single.php" title=""><i class="fa fa-eye"></i>  114</small>

                                    </div><!-- end meta -->

                                </div><!-- end blog-box -->

                                <hr class="invis">


                            </div><!-- end blog-list -->';
                         }?>
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                       <?php include 'sidbar.php';?>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

       <?php include 'footer.php';?>