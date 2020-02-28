<?php
/*
Template Name: About Us
*/
get_header();
?>
        <!--====== About Start ======-->
        <section class="nandine-about section-padding">
            <!-- About Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2><?php echo $nandine['about_header']?> <span><?php echo $nandine['about_header2']?></span></h2>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- About Content -->
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="about-left wow rollIn">
                            <img src="<?php echo $nandine['about_left']['url']?>" alt="About Us">
                            <div class="left-details">
                                <h4>hanly</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="about-right wow fadeInDown">
                            <h3><?php echo $nandine['about_right']?></h3>
                            <blockquote><p><?php echo $nandine['about_right2']?></p></blockquote>
                            <a href="<?php the_permalink();?>" class="about-link">Resume / CV <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== About End ======-->
		
        <!-- Video Play -->
        <section class="video-play section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="video">
                            <h2>Want to Know More About Us ?</h2>
                            <a id="video-link" href="https://www.youtube.com/watch?v=s1EpnjzRyDg"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video Play End -->		

<?php get_footer();?>